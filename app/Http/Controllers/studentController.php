<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class studentController extends Controller
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

    public function profile()
    {
        $user = \Auth::user();
       
        //get subjects of this stages
        $questions = quetion::with('User','User.student.stage.subject','answer','answer.User','subject')->where('user_id', $user->id)->get();
        
        return view('student.profile',compact('user','questions'));
    }

     public function groups()
    {

        return view('student.groups');
    }

     public function friends()
    {
        $user = \Auth::user();
       // $stage_id = DB::table('follower')->where('user_id', $auth_id)->select('thefollower')->with('user','')->get();
        
        $followers = User::with('follower','follower.user','follower.user.student.stage')->where('id',$user->id)->get();
        return view('student.friends',compact('followers'));
    	
    }

     public function masseges()
    {
    	 echo "string";
    }

     public function notification()
    {
    	return view('student.notification');
    }

     public function questions()
    {
    	return view('student.questions');
    }

      public function setting()
    {
      echo "string";	
    }
}
