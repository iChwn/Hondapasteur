<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skeamanan extends Model
{
	protected $fillable=['id','mobil_id','modell_id',
	'key_type',
	'keyless_entry',
	'immobilizer',
	'alarm_system',
	'keyless_trunk_opener',
	'smart_entry',
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
