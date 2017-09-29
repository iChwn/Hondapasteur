<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ssuspensi extends Model
{
    protected $fillable=['id','mobil_id','modell_id','suspensi_depan','suspensi_belakang'];

    public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}
	public function modell()
	{
		return $this->hasMany('App\Modell');
	}
}
