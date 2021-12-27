<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model {

	public function subKehDo(){
        return $this->belongsTo('App\SubKehDo');
    }

}
