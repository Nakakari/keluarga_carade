<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DataKeluargaRequest extends FormRequest
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
            'id_users' => 'required',
            'nomor_kk' => 'required',
            'wilayah_kerja_puskesmas' => 'required',
            'provinsi' => 'required',
            'kabkot' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ];
    }
}
