<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
	protected $fillable = ['name'];
	
	public function photos(){
		return $this->morpMany('App\Photo', 'imageable');
	}
}
