<?php
 
 namespace App\Http;

 
 class Flash 
 {

 	public function message($type,$title,$message)
 	{
 		session()->flash('flash_massege',[
 			'title' => $title,
 			'message' => $message,
 			'type' => $type
 			]);
 	}

 }