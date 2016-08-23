<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    protected $table = 'roles';
   // Model Relationship
    public function users(){
        return $this->hasMany('App\User' , 'role_id','id');
    }


    // Model Relationship End
}
