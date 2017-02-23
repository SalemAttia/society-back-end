<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    public function student()
    {
            return $this->hasMany(student::class);
    }

    public function User()
    {
         return $this->hasMany(User::class);
    }

}
