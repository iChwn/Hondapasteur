<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skemudi extends Model
{
    protected $fillable=['id','mobil_id','modell_id','sistem','tilt_steering','telescopic_steering'];

    public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}
	public function modell()
	{
		return $this->hasMany('App\Modell');
	}
}
