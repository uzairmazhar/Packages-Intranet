<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPhotos extends Model {

	public function Event(){
        return $this->belongsTo('App\TimeLineEvent');
    }

}
