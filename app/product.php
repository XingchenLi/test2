<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function User(){
        $this->belongsToMany('App\User');
    }
}
