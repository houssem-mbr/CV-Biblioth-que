<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
	//on ajoute ces deux por le soft delete
     use SoftDeletes;

     protected $dates = ['deleted_at'];

     public function user(){

     	return $this->belongsTo('App\User');

     }
}
