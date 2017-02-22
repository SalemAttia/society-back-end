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
}
