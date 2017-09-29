<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Srem extends Model
{
    protected $fillable=['id','mobil_id','modell_id','absebd','brake_assist','rem_depan','rem_belakang'];
    
    public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}
	public function modell()
	{
		return $this->hasMany('App\Modell');
	}
}
