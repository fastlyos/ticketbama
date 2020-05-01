<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    // public $table = "User";


    public function Comment(){
        return $this->hasMany('App\Models\Comment','id','users_id');
       }

       public function Event_rating(){
        return $this->hasMany('App\Models\Event_rating','id','user_id');
       }

       public function Favourite(){
        return $this->hasMany('App\Models\Favourite','id','user_id');
       }

       public function Order(){

        return $this->hasMany('App\Models\Order' ,'id', 'user_id');
    }

    public function Role(){
        return $this->belongsToMany('App\Models\Role');
    }
    public function Photo(){
        return $this->morphMany('App\Models\Photo','imageable');
    }
}
