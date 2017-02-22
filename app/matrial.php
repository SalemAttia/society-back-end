<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matrial extends Model
{
    public function subject()
    {
    	return $this->belongsTo(subject::class);
    }
    public function User()
    {
    	return $this->belongsTo(User::class);
    }
}
