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
    public function userprofile($id)
    {
        $user = User::find($id);
        //get subjects of this stages
        if ($user->rol == '2') {
             $questions = quetion::with('User','User.student.stage.subject','answer','answer.User','subject')->where('user_id', $id)->get();
        
              return view('student.userprofile',compact('user','questions'));
        }else{
             $user = User::find($id);
              return view('student.docprofile',compact('user'));
        }
       
    }

     public function groups()
    {

        $user = \Auth::user();
        //stage_id
        $stage_id = DB::table('students')->where('user_id', $user->id)->select('stage_id')->get();
        $stage_id = $stage_id[0]->stage_id;
           
        //get subjects of this stages
        $subjects = subject::with('group')->where('stage_id',$stage_id)->get();
            

        return view('student.groups',compact('subjects'));
    }
    public function group($id)
    {

        //get this group
         $group = group::with('subject')->where('id',$id)->get();
         

         $students = student::with('user')->where('stage_id', $group[0]->subject->stage_id)->get();


           
       //get quetion for this group depand on subject
         $questions = quetion::with('User','User.student.stage.subject','answer','answer.User','subject','subject.stage')->where('subject_id', $group[0]->subject->id)->get();
        
        

         $matrials = matrial::with('User','subject')->where('subject_id', $group[0]->subject->id)->get();
        
        //return  $matrial;
        return view('student.group',compact('group','questions','matrials','students'));
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
        $user = \Auth::user();
       
         $stage_id = DB::table('students')->where('user_id', $user->id)->select('stage_id')->get();
            $stage_id = $stage_id[0]->stage_id;
           
            //get subjects of this stages
            $subjects = subject::with('question','question.User','question.answer','question.answer.User','matrial','matrial.User')->where('stage_id',$stage_id)->get();

        
    	return view('student.questions',compact('subjects'));
    }

    public function singleQuestion($id)
    {

        $question = quetion::with('subject','User','answer','answer.User')->where('id',$id)->get();

        return view('student.singleQuestion',compact('question'));


    }

      public function setting()
    {
      echo "string";	
    }
}
