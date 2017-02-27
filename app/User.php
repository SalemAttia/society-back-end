<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\answer;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function question()
    {
            return $this->hasMany(quetion::class);
    }

    public function answer()
    {
            return $this->hasMany(answer::class);
    }
    public function matrial()
    {
            return $this->hasMany(matrial::class);
    }
    public function student()
    {
        return $this->hasOne(student::class);
    }

    public function follower()
    {
        return $this->hasMany('App\follower', 'thefollower');
    }
    public function doctor()
    {
        return $this->hasOne(doctor::class);
    }
   public function stage()
    {
            return $this->belongsTo(stage::class);
    }
    public function subject()
    {
            return $this->belongsToMany(subject::class,'has_subjects');
    }

     
}
