<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class follower extends Model
{
	protected $fillable = [
        'user_id', 
        'thefollower'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
