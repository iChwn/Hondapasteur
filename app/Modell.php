<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Modell extends Model
{
	protected $fillable=['nama_model','deskripsi'];

	public function mobils()
	{
		return $this->hasMany('App\Mobil');
	}

	public static function boot()
	{
		parent::boot();
		self::deleting(function($model) {
// mengecek apakah model masih punya mobil
			if ($model->mobils->count() > 0) {
// menyiapkan pesan error
				$html = 'Model tidak bisa dihapus karena masih memiliki Mobil : ';
				$html .= '<ul>';
				foreach ($model->mobils as $mobil) {
					$html .= "<li>$mobil->nama_mobil</li>";
				}
				$html .= '</ul>';
				Session::flash("flash_notification", [
					"level"=>"danger",
					"message"=>$html
					]);
// membatalkan proses penghapusan
				return false;
			}
		});
	}
}
