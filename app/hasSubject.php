<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasSubject extends Model
{
   
     public function doctor()
    {
        return $this->belongsTo(doctor::class);
    }

     public function subject()
    {
        return $this->belongsTo(subject::class);
    }

}
