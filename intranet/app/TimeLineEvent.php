<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeLineEvent extends Model {

	public function photos(){
        return $this->hasMany('App\EventPhotos');
    }

}
