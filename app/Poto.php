<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poto extends Model
{
    protected $fillable =['id','mobil_id','cover'];

	public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}
}
