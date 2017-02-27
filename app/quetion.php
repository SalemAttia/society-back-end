<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\subject;
use App\User;
use App\answer;

class quetion extends Model
{
    protected $fillable = [
      'user_id',
      'body',
      'subject_id'

    ];

    public function subject()
    {
    	return $this->belongsTo(subject::class);
    }

    public function User()
    {
    	return $this->belongsTo(User::class);
    }

    public function answer()
    {
    	return $this->hasMany(answer::class);
    }
}
