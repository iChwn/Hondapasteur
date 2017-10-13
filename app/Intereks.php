<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intereks extends Model
{
    protected $fillable =['id','modell_id','in1','in2','in3','ek1','ek2','ek3'];

	public function models()
	{
		return $this->hasMany('App\Modell');
	}
}
