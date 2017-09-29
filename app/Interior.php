<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interior extends Model
{
	protected $fillable=['id','mobil_id','modell_id',
	'audio',
	'mil',
	'econ',
	'one_push_ignition_system',
	'leather_steering_shift_knob',
	'audio_steering_switch',
	'paddle_shift',
	'cruise_control',
	'auto_door_lock_by_speed',
	'power_window',
	'tweeter',
	'trunk_capacity',
	'green_glass',
	'driver_seat_heigh_adjuster',
	'front_rear_seat_reclining',
	'navi_system',
	'hft',
	'meter_cluster',
	'auto_dimming_rearview_mirror',
	'speed_sensitive_volume_compensation',
	'rear_ventilation_ac',
	'seat_trim_material',
	'active_noise_cancelation',
	'power_seat_adjustment',
	'driver_seat',
	'side_sunshade',
	'power_rear_sunshade',
	'rear_audio_switch_control',
	'auto_dimming_rear_view',
	'rear_seat_fold_down',
	'active_noise_cancellation',
	'automatic_ac',
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
