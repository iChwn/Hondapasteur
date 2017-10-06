<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
	protected $fillable = ['id','modell_id','nama_mobil','slug', 'deskripsi', 'spesifikasi','cover','harga'];

	public function modell()
	{
		return $this->belongsTo('App\Modell');
	}

	public function poto()
	{
		return $this->belongsTo('App\Poto');
	}
}
