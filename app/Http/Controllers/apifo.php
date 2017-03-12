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
use Response;


class apifo extends Controller
{
	 public function __construct()
    {
         $this->middleware('auth');
    }

    public function users()
    {
      $users = User::get()->all();
      return Response::json([
          'data' => $users], 200);

    }

    public function questions()
     {
         $questions = quetion::with('answer','User')->get();

         return Response::json([
          'data' => $questions->toArray()], 200);
     }
        public function question($id)
     {
         
         $questions = quetion::find($id);

         if (! $questions) {
           return Response::json([
            'error' => [
            'message' => 'question desnot exist'
            ]
            
            ],400);
         }

         return Response::json([
          'data' => $this->transformsingle($questions)
          ], 200);
     }

     private function transformcollection($questions){
      return array_map(function($question){
        return [
         'content' => $question['body'] ,
         'user' => $question['user_id'],
         'answer' => $question['question.answer'] 
        ];
      }, $questions->toArray());
     }

     private function transformsingle($questions){
      
        return [
         'content' => $questions['body'] ,
         'user' => $questions['user_id'] 
        ];
     
     }
}
