<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    // public $table = "Event";
    
   public function Sanse(){
       return $this->belongsTo('App\Models\Sanse');
   }

   public function Hall(){
    return $this->belongsTo('App\Models\Hall','Hall_id','id');
   }

   public function Genre(){
    return $this->belongsTo('App\Models\Genre','genres_id','id');
   }

   public function Category(){
    return $this->belongsTo('App\Models\Category','categories_id','id');
   }

   public function Blog(){
    return $this->hasMany('App\Models\Blog');
   }

   public function Comment(){
    return $this->hasMany('App\Models\Comment','id','events_id');
   }

   public function Event_rating(){
    return $this->hasMany('App\Models\Event_rating','id','event_id');
   }

   public function Favourite(){
    return $this->hasMany('App\Models\Favourite','id','event_id');
   }

   public function Order(){

    return $this->hasMany('App\Models\Order' ,'id', 'events_id');
}
   public function Tag()
  {
    return $this->morphtoMany("App\Models\Tag","tagable");
   }

   public function Photo(){
    return $this->morphMany('App\Models\Photo','imageable');
}

public function Video(){
    return $this->morphMany('App\Models\Video','videoable');
}

public function Venue(){
    return $this->belongsToMany('App\Models\Venue' ,'event_venue');
}

public function Hall_sanse(){
    return $this->hasMany('App\Models\Hall_sanse');
}

public function Slider_image(){
    return $this->hasMany('App\Models\Slider_image');
}

}
