<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimensi extends Model
{
	protected $fillable=['id','mobil_id','modell_id','plt','jarak_sumbu_roda','jarak_pijak_db','kapasitas_tangki','berat_kosong'];
    
    public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}
	public function modell()
	{
		return $this->hasMany('App\Modell');
	}
}
