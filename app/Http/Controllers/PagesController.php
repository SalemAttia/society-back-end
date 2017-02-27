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
            $subjects = subject::with('question','question.User','question.answer','question.subject','question.answer.User','matrial','matrial.User')->where('stage_id',$stage_id)->get();
            

            //count number of question and matrial in all subjects he sigin for
            $matrials = array();
            $questions = array();

            $numquestion = 0; $nummatrial = 0;
            foreach ($subjects as $subject) {
             
                $numquestion = $numquestion + $subject->question->count();
                 
                $nummatrial =  $nummatrial + $subject->matrial->count();

                foreach ($subject->question as $questio) {
                  array_push($questions, $questio);
                }


            }

             foreach ($subjects as $subject) {
             
                foreach ($subject->matrial as $matrial) {
                  array_push($matrials, $matrial);
                }
            }

            usort($questions, function($a,$b){
               return $a->created_at < $b->created_at;
            });

            usort($matrials, function($a,$b){
               return $a->created_at < $b->created_at;
            });

            // $newfeeds = array();
            // array_push($newfeeds, $matrials);
            // array_push($newfeeds, $questions);
            
            //  usort($newfeeds, function($a,$b){
            //    return $a[0]->created_at > $b[0]->created_at;
            // });
           
            //return $newfeeds;

          

              
        	return view('student.home',compact('subjects','nummatrial','numquestion','questions','matrials'));
        }
    	
    }
}


