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
use App\Http\Requests\askform;
use App\Http\Requests\answerquestion;
use App\Http\Requests\followerforme;

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
        $questions = quetion::with('User','User.student.stage.subject','answer','answer.User','subject')->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

             //people who follow me  --- they follow doctor
               $followers = follower::with('user','user.student.stage')->where('thefollower',$user->id)->select('user_id')->get();
                 $userfollow = array();
                 foreach ($followers as $follower) {
                   $userfollow[] = User::with('student','student.stage','doctor')->where('id',$follower->user_id)->get(); 
                 }
        
        return view('student.profile',compact('user','questions','userfollow'));
    }
    public function userprofile($id)
    {
        $user = User::find($id);
        //get subjects of this stages
        if ($user->rol == '2') {
             $questions = quetion::with('User','User.student.stage.subject','answer','answer.User','subject')->where('user_id', $id)->orderBy('created_at', 'desc')->get();
             // i follow this people

             //people who follow me  --- they follow doctor
               $followers = follower::with('user','user.student.stage')->where('thefollower',$id)->select('user_id')->get();
                 $userfollow = array();
                 foreach ($followers as $follower) {
                   $userfollow[] = User::with('student','student.stage','doctor')->where('id',$follower->user_id)->get(); 
                 }

                //i follow he
               $followering = follower::with('user','user.student.stage')->where('thefollower',\Auth::user()->id)->select('*')->get();
                 $userfollowing = array();
                 foreach ($followering as $followering) {
                   $userfollowing[] = User::with('doctor')->where('id',$followering->user_id)->get(); 
                 }
                if($userfollowing){
                 foreach($userfollowing as $following){
                   if ($following[0]['id'] == $id) {
                       $ifollow = 1;
                   }else{
                      $ifollow = 0;
                   }
                   
                 }
             }else{
                $ifollow = 0;
             }

                 

        
              return view('student.userprofile',compact('user','questions','userfollow','userfollowing','ifollow'));
        }else{
             $user = User::with('subject','answer','answer.quetion','answer.quetion.User','doctor')->where('id',$id)->get();
             
               $matrials = matrial::with('subject')->where('user_id', $id)->get();
                
                //people who follow me  --- they follow doctor
               $followers = follower::with('user','user.student.stage')->where('user_id',$id)->select('thefollower')->get();
                 $userfollower = array();
                 foreach ($followers as $follower) {
                   $userfollower[] = User::with('student','student.stage')->where('id',$follower->thefollower)->get(); 
                 }

                 
              


               return view('student.docprofile',compact('user','matrials','userfollower'));
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
         

         $students = student::with('user')->where('stage_id', $group[0]->subject->stage_id)->orderBy('created_at', 'desc')->get();


           
       //get quetion for this group depand on subject
         $questions = quetion::with('User','User.student.stage.subject','answer','answer.User','subject','subject.stage')->where('subject_id', $group[0]->subject->id)->orderBy('created_at', 'desc')->get();
        
        

         $matrials = matrial::with('User','subject')->where('subject_id', $group[0]->subject->id)->orderBy('created_at', 'desc')->get();
        
        //return  $matrial;
        return view('student.group',compact('group','questions','matrials','students'));
    }

     public function friends()
    {
        $user = \Auth::user();
       // $stage_id = DB::table('follower')->where('user_id', $auth_id)->select('thefollower')->with('user','')->get();
        
        $followers = User::with('follower','follower.user','follower.user.student.stage')->where('id',$user->id)->orderBy('created_at', 'desc')->get();
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
            $questions = array();
            $subjects = subject::with('question','question.User','question.answer','question.answer.User','matrial','matrial.User')->where('stage_id',$stage_id)->orderBy('created_at', 'desc')->get();
               foreach ($subjects as $subject) {
                foreach ($subject->question as $questio) {
                  array_push($questions, $questio);
                }



            }
            usort($questions, function($a,$b){
               return $a->created_at < $b->created_at;
            });
        
    	return view('student.questions',compact('subjects','questions'));
    }

    public function singleQuestion($id)
    {

        $question = quetion::with('subject','User','answer','answer.User')->where('id',$id)->get();

        return view('student.singleQuestion',compact('question'));


    }

    public function store(askform $request)
    {
        quetion::create($request->all());

        return redirect()->back();
       
    }
    public function postanswer(answerquestion $request)
    {
        answer::create($request->all());

        return redirect()->back();
    }

    public function uploads()
    {
        // user login
        $auth_id = \Auth::user()->id;  
        //stage_id
            $stage_id = DB::table('students')->where('user_id', $auth_id)->select('stage_id')->get();
            $stage_id = $stage_id[0]->stage_id;
           
           //get subjects of this stages
            

            $subjects = subject::with('matrial','matrial.User')->where('stage_id',$stage_id)->get();
               $uploads = array();
               foreach ($subjects as $subject) {
                foreach ($subject->matrial as $upload) {
                  array_push($uploads, $upload);
                }

            }
            usort($uploads, function($a,$b){
               return $a->created_at < $b->created_at;
            });

            return view('student.uploads',compact('subjects','uploads'));

    }

    public function follow(followerforme $request)
    {
      follower::create($request->all());

        return redirect()->back();  
    }

      public function setting()
    {
         $user = \Auth::user();
         if ($user->rol == 2) {
         $data = DB::table('students')->where('user_id', $user->id)->select('*')->get();
            
         }else{
         $data = DB::table('doctor')->where('user_id', $user->id)->select('*')->get();

         }
       
       return view('student.setting',compact('user','data'));
      
    }

    public function update(Request $request,$id)
    {
         
           DB::table('users')
            ->where('id', $id)
            ->update(['name' => $request->name,'email' => $request->email,'password' => bcrypt($request->password)]);

        return back();
    }
    public function updatequestion($id)
    {
         $question = quetion::with('subject','User','answer','answer.User')->where('id',$id)->get();

        return view('student.singleQuestionedit',compact('question'));
    }
    public function updatethisQuestion(Request $request,$id)
    {
         
           DB::table('quetions')
            ->where('id', $id)
            ->update(['body' => $request->body]);

        return back();
    }

}
