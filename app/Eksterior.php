<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eksterior extends Model
{
	protected $fillable=['id','mobil_id','modell_id',
	'front_lamp',
	'fog_lamp',
	'door_mirror',
	'door_handle',
	'led_high_mount_stop_lamp',
	'exhaust_pipe_finisher',
	'glass_print_antenna',
	'auto_wiper',
	'hydrophillic_mirror'
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
