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
use App\News;
use App\Http\Requests\uploadnews;
use App\Http\Requests\addnewuser;
use App\Http\Requests\addnewgroup;

class admaincontroller extends Controller
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

    public function Users()
    {
    	    $students =array();
            $doctors =array();
            $admins = array();
            $users = User::with('student','doctor','student.stage','subject')->get();
            foreach ($users as $user) {
             if ($user->rol == 2) {

                  array_push($students, $user);
              
             }elseif ($user->rol == 1) {

                  array_push($doctors, $user);
              
             }else{
                  array_push($admins, $user);

             }
                
            }
           
            
        	return view('admins.users',compact('students','admins','doctors'));
    }
    public function userdelet(User $User)
    {
         $User->delete();
        return redirect()->back();
    }
    public function uploadnews(uploadnews $request)
    {
        $user_id = \Auth::user()->id;
        $body = $request->input('body');
        $stage_id = $request->input('stage_id');
       
         if ( !is_null($request->file('attachfile'))) {
            $attachfile = $request->file('attachfile')->store('uploads');
            $attachfile = substr($attachfile, 8);
         }else{
            $attachfile = null;
         }
        
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");

        DB::table('newss')->insert(
      array('user_id' => $user_id, 'body' => $body, 'stage_id' => $stage_id, 'attachfile' => $attachfile,'created_at' => $created_at,'updated_at' => $updated_at));
        
        return redirect()->back();
    }
    public function addnewuser(addnewuser $request)
    {
        
        $name = $request->input('name');
        $rol = $request->input('rol');
        $email = $request->input('email');
        $password = $request->input('password');
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");

        $stage_id = $request->input('stage_id');
         DB::table('users')->insert(
         array('name' => $request->name,'rol' => $request->rol,'email' => $request->email,'password' => bcrypt($request->password),'created_at' => $created_at,'updated_at' => $updated_at));
       

       
        
        return redirect()->back();
    }
     public function ManageGroups()
    {
           $subjects = subject::get()->all();
    	
            $groups = group::with('subject','subject.matrial','subject.question','subject.stage')->get();
        	return view('admins.Groups',compact('groups','subjects'));
    }
    public function addnewgroup(addnewgroup $request)
    {
        
        $name = $request->input('name');
      
        $subject_id = $request->input('subject_id');
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");

      
         DB::table('groups')->insert(
         array('name' => $request->name,'subject_id' => $request->subject_id,'created_at' => $created_at,'updated_at' => $updated_at));
       

       
        
        return redirect()->back();
    }
    public function deletegroup(group $group)
    {
         $group->delete();
        return redirect()->back();
    }

     public function ManageQuestions()
    {
    	
            $questions = quetion::with('User','subject','answer','subject.group','subject.stage')->get();
        	return view('admins.questions',compact('questions'));
    }
     public function deletequestion(quetion $quetion)
    {
         $quetion->delete();
        return redirect()->back();
    }

     public function ManageMaterials()
    {
    	
            $matrials = matrial::with('User','subject','subject.stage')->get();
        	return view('admins.materials',compact('matrials'));
    }

}
