<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmisi extends Model
{	
	protected $fillable=['id','mobil_id','modell_id','tipe','no1','no2','no3','no4','no5','reverse','final_gear'];

	public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}
	public function modell()
	{
		return $this->hasMany('App\Modell');
	}
}
