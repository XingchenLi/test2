<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   // Model Relationship
    public function user(){
        $this->belongsTo('App\User');
    }

    // Model Relationship End
}
