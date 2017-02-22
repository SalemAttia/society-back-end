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
        return view('student.profile');
    }

     public function groups()
    {
        return view('student.groups');
    }

     public function friends()
    {
        return view('student.friends');
    	
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
