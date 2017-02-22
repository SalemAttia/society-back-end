<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Provider; 

use App\User;
use Session;
use DB;
use Mail;
use App\admin;
use App\answer;
use App\doctor;
use App\faculty;
use App\follower;
use App\group;
use App\hasSubject;
use App\matrial;
use App\quetion;
use App\stage;
use App\student;
use App\subject;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function home()
    {
        $rol = \Auth::user()->rol;
        $auth_id = \Auth::user()->id;

        
        if ($rol == '0') {
        	//admin
        	return view('admins.dashbord');
        }
        else if ($rol == '1') {
        	//doctor
        	return view('doctors.home');
        }
        else{

            //stage_id
            $stage_id = DB::table('students')->where('user_id', $auth_id)->select('stage_id')->get();
            $stage_id = $stage_id[0]->stage_id;
           
            //get subjects of this stages
            $subjects = subject::with('question','question.User','question.answer','question.answer.User','matrial','matrial.User')->where('stage_id',$stage_id)->get();
            
           //$subjects = subject::find(1);       
            //get leatest 5 Quetions and leatest 5 news
           // $allsub = array();
           //  $newfeeds = array();
           //  $users = array();

           // $newfeeds = array();
           //  foreach ($subjects as $subject ) {
           //    $allsubjects = $subject->id;
           //    $a =  subject::find($allsubjects);
           //    $newfee $a->withCount('question')->get();
              
           //  }
           //  return $newfeeds[0];
           //return dd($newfeeds);
           //  return $newfeeds[0][1]->user_id;

           

            // $posts = subject::withCount('question')->get();
            // foreach ($posts as $post) {
            //         echo $post->question_count;
            //     }
           // return $posts;


        	//student

        	return view('student.home',compact('subjects'));
        }
    	
    }
}
