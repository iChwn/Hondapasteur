<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    protected $fillable =['id','mobil_id','modell_id','tipe','sistem_bbm','diameter_langkah','silinder','perbandingan_kompresi','daya_maksimum','momen_puntri_maksimum'];

	public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}
	public function modell()
	{
		return $this->hasMany('App\Modell');
	}
}
