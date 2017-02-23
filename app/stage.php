<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stage extends Model
{
     public function subject()
    {
    		return $this->hasMany(subject::class);
    }
     public function user()
    {
    		return $this->hasMany(User::class);
    }
    public function student()
    {
            return $this->hasMany(student::class);
    }
}
