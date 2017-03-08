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
use App\helpers;

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
       
       if ($user->rol == '2') {
           //get subjects of this stages
        $questions = quetion::with('User','User.student.stage.subject','answer','answer.User','subject')->where('user_id', $user->id)->orderBy('created_at', 'desc')->get();

             //people who follow me  --- they follow doctor
               $followers = follower::with('user','user.student.stage')->where('thefollower',$user->id)->select('user_id')->get();
                 $userfollow = array();
                 foreach ($followers as $follower) {
                   $userfollow[] = User::with('student','student.stage','doctor')->where('id',$follower->user_id)->get(); 
                 }

                 //flash

                 
        
        return view('student.profile',compact('user','questions','userfollow'));
       }else{
         $questions = array();
         $subjects = hasSubject::with('subject','subject.matrial','subject.question','subject.question.answer','subject.question.answer.User','doctor')->where('user_id',$user->id)->get();
            $numquestion = 0; $nummatrial = 0;
            foreach ($subjects as $subjec) {
                  foreach ($subjec->subject->question as $question) {
                     foreach ($question->answer as $answer) {
                         if ($answer->User->id == $user->id) {
                            array_push($questions, $question);
                         }
                      } 
                  } 
             
            }
            usort($questions, function($a,$b){
               return $a->created_at < $b->created_at;
            });

            $user = User::with('subject','answer','answer.quetion','answer.quetion.User','doctor')->where('id',\Auth::user()->id)->get();

             
               $matrials = matrial::with('subject')->where('user_id',\Auth::user()->id)->get();
                
                //people who follow me  --- they follow doctor
               $followers = follower::with('user','user.student.stage')->where('user_id',\Auth::user()->id)->select('thefollower')->get();
                 $userfollower = array();
                 foreach ($followers as $follower) {
                   $userfollower[] = User::with('student','student.stage')->where('id',$follower->thefollower)->get(); 
                 }

           

            return view('doctors.profile',compact('subjects','questions','numquestion','nummatrial','user','matrials','userfollower'));

       }
        

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
             
               $matrials = matrial::with('subject')->where('user_id', $id)->orderBy('created_at', 'desc')->get();
                
                //people who follow me  --- they follow doctor
               $followers = follower::with('user','user.student.stage')->where('user_id',$id)->select('thefollower')->get();
                 $userfollower = array();
                 foreach ($followers as $follower) {
                   $userfollower[] = User::with('student','student.stage')->where('id',$follower->thefollower)->get(); 
                 }
                 $questions = array();
              $subjects = hasSubject::with('subject','subject.matrial','subject.question','subject.question.answer','subject.question.answer.User','doctor')->where('user_id',$id)->get();
            $numquestion = 0; $nummatrial = 0;
            foreach ($subjects as $subjec) {
                  foreach ($subjec->subject->question as $question) {
                     foreach ($question->answer as $answer) {
                         if ($answer->User->id == $id) {
                            array_push($questions, $question);
                         }
                      } 
                  } 
             
            }
            usort($questions, function($a,$b){
               return $a->created_at < $b->created_at;
            });
           

                 
              


               return view('student.docprofile',compact('questions','user','matrials','userfollower'));
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
        flash('success','question','question created successfully');

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
        
          return view('student.setting',compact('user','data'));
         
         }elseif($user->rol == 1){
         $data = DB::table('doctors')->where('user_id', $user->id)->select('*')->get();
          return view('doctors.setting',compact('user','data'));
          
         }else{
          $data = DB::table('admins')->where('user_id', $user->id)->select('*')->get();
          return view('admins.setting',compact('user','data'));
         }

      
    }

    public function update(Request $request,$id)
    {
         
           DB::table('users')
            ->where('id', $id)
            ->update(['name' => $request->name,'email' => $request->email,'password' => bcrypt($request->password)]);
        flash('success','update','update successfully');
        
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
        flash('success','update','update successfully');
        
        return back();
    }
    public function download($id)
    {

      $patha = 'app\uploads/'.$id;
      $path = storage_path($patha);
      return response()->download($path);
    }

}
