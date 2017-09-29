<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
	protected $fillable=['id','mobil_id','modell_id','ban','roda'];

	public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}
	public function modell()
	{
		return $this->hasMany('App\Modell');
	}
}
