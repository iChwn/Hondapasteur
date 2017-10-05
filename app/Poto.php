<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poto extends Model
{
    protected $fillable =['id','mobil_id','cover','cover2','cover3'];

	public function mobil()
	{
		return $this->hasMany('App\Mobil');
	}
}
