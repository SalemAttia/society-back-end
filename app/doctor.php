<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
   public function User()
    {
        return $this->hasOne(User::class);
    }
    public function faculty()
    {
        return $this->belongsTo('App\faculty', 'faclaty_id');
    }
     public function subject()
    {
            return $this->belongsToMany(subject::class,'has_subjects');
    }

  
     
}
