<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
     protected $fillable = [
        'user_id', 'stage_id', 'faclaty_id',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function faculty()
    {
        return $this->belongsTo('App\faculty', 'faclaty_id');
    }

     public function stage()
    {
    		return $this->belongsTo(stage::class);
    }
}
