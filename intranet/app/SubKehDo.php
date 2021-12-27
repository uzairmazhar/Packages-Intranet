<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKehDo extends Model {

	protected $table = 'sub_keh_do';

	public function likes_dislikes(){
		return $this->hasMany('App\Like');
	}

	public function responseIps(){
		return $this->likes_dislikes()->select('ip_address', 'like_dislike');
	}
}
