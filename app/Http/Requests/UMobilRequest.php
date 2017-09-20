<?php
namespace App\Http\Requests;
class UMobilRequest extends MobilRequest
{
	public function rules()
	{
		$rules = parent::rules();
		$rules['nama_mobil'] = 'required|unique:mobils,nama_mobil,' . $this->route('mobil');
		return $rules;
	}
}