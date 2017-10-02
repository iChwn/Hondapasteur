<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fkeselamatan extends Model
{
	protected $fillable=['id','mobil_id','modell_id',
	'struktur_rangka_body',
	'side_impact_beam',
	'side_airbags',
	'side_curtain_airbags',
	'pedestrian_protection',
	'dual_front_srs_airbags',
	'sabuk_keselamatan_f',
	'sabuk_keselamatan_r',
	'pretensioner_load_limiter_seatbelt',
	'isofix_tether',
	'parking_sensor',
	'vsa',
	'hill_start_assist',
	'emergency_stop_ignal',
	];

	public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}
	public function modell()
	{
		return $this->hasMany('App\Modell');
	}
}
