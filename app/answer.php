<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    public function User()
    {
    	return $this->belongsTo(User::class);
    }

     public function question()
    {
    	return $this->belongsTo(quetion::class);
    }

}
