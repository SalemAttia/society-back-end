<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
     protected $fillable = [
      'user_id',
      'body',
      'quetion_id'

    ];
    
    public function User()
    {
    	return $this->belongsTo(User::class);
    }

     public function question()
    {
    	return $this->belongsTo(quetion::class);
    }
    
    public function quetion()
    {
    	return $this->belongsTo(quetion::class);
    }

}
