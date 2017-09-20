<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MobilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_mobil'=> 'required|unique:mobils,nama_mobil',
            'modell_id' => 'required|exists:modells,id',
            'harga'=> 'required|numeric',
            'deskripsi' => 'required',
            'spesifikasi' => 'required',
            'cover'=> 'image|max:2048'
        ];
    }
}
