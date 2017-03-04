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
use App\Http\Requests\uploadform;
use App\Http\Requests\answerquestion;
use App\Http\Requests\followerforme;
use Illuminate\Support\Facades\Input;


class doctorcontroller extends Controller
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

  
  public function uploadlecture(uploadform $request)
    {
        $user_id = \Auth::user()->id;
        $name = $request->input('name');
        $subject_id = $request->input('subject_id');
       
         
        $attachfile = $request->file('attachfile')->store('uploads');
        $attachfile = substr($attachfile, 8);
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");

        DB::table('matrials')->insert(
      array('user_id' => $user_id, 'name' => $name, 'subject_id' => $subject_id, 'attachfile' => $attachfile,'created_at' => $created_at,'updated_at' => $updated_at));
        
        return redirect()->back();
       
    }
    public function questions()
    {
         $user_id = \Auth::user()->id;

       $questions = array();
         $subjects = hasSubject::with('subject','subject.matrial','subject.question','subject.question.User','subject.question.answer','subject.question.answer.User','doctor')->where('user_id',$user_id)->get();
            $numquestion = 0; $nummatrial = 0; $flag = 0;
            foreach ($subjects as $subjec) {
                  foreach ($subjec->subject->question as $question) {
                    if ($question->answer->count() == 0){
                            array_push($questions, $question);
                        continue;
                            
                         }
                         else{
                            foreach ($question->answer as $answer) {
                         
                          if ($answer->User->id == $user_id) {
                                $flag = 0;
                              
                         }
                         else{
                            $flag = 1;
                         }
                      }
                      if ($flag == 1) {
                            array_push($questions, $question);
                       }else{
                        continue;
                       }
                         } 
                     
                      


                  } 
             
            }
            usort($questions, function($a,$b){
               return $a->created_at < $b->created_at;
            });
            return view('doctors.questions',compact('subjects','questions','numquestion','user'));

    }
    public function matrial()
    {
         $matrials = matrial::with('subject')->where('user_id',\Auth::user()->id)->orderBy('created_at', 'desc')->get();
         $subjects = hasSubject::with('subject')->where('user_id',\Auth::user()->id)->get();
        return view('doctors.materials',compact('matrials','subjects'));
        
    }
    public function deletematrial(matrial $matrial)
    {
        $matrial->delete();
        return redirect()->back();
    }

}
