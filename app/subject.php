<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\quetion;


class subject extends Model
{
    public function question()
    {
    		return $this->hasMany(quetion::class);
    }

    public function matrial()
    {
    		return $this->hasMany(matrial::class);
    }

    public function stage()
    {
    		return $this->belongsTo(stage::class);
    }

     public function group()
    {
        return $this->hasOne(group::class);
    }
      public function doctor()
    {
        return $this->belongsToMany(doctor::class,'has_subjects');
    }

}
