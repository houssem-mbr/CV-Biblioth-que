<?php


namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use SoftDeletes;
	//public $table = "articles";
     protected $dates = ['deleted_at'];

     public function user(){

     	return $this->belongsTo('App\User');

	}
	public function category(){
		return $this->belongsTo('App\Category');
	}
}
