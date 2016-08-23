<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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


    //############## User Model Relationship ####################################



    public function role(){
        return $this->hasOne('App\Role', 'id' , 'role_id');
    }

    public function article(){
        return $this->hasMany('App\Article', 'id' ,'posterId');
    }

    public function product(){
        return $this->belongsToMany('App\product', 'product_user');
    }



    //################ User Model relationship ends ##################################################

    public function hasRole($roles){
        $this->have_role = $this->getUserRole();

        // Check if the user is a root account

        if($this->have_role->name == 'Root'){
            return true;
        }

        if(is_array($roles)){
            foreach($roles as $need_role){
                if($this->checkIfUserHasRole($need_role)){
                    return true;
                }
            }
        }
        else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }


    private function getUserRole(){
        return $this->role()->getResults();
    }

    private function checkIfUserHasRole($need_role){
        return (strtolower($need_role) == strtolower($this->have_role->name) ? true : false);
    }








}
