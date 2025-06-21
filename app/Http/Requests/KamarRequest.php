<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KamarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nama_kamar'            => 'required|max:100|unique:kamars',
          'kategori'              => 'required',
          'jenis_kamar'           => 'required',
          'bg_foto'               => 'required|image|mimes:jpeg,png,jpg|max:2048',
          'book'                  => 'required',
          'luas_kamar'            => 'required',
          'stok_kamar'            => 'required|numeric',
          'harga_kamar'           => 'required|numeric',
          'listrik'               => 'required',
          'deposit'               => 'required|numeric',
          'biaya_admin'           => 'required|numeric',
          // 'addmore[0][name]'      => 'required',
          // 'addkm[0][name]'        => 'required',
          // 'addbersama[0][name]'   => 'required',
          // 'addparkir[0][name]'    => 'required',
          // 'addarea[0][name]'      => 'required',
          // 'addfoto[0][name]'      => 'required|image|mimes:jpeg,png,jpg|max:2048'
          ];
    }

    public function messages()
    {
      return [
        'nama_kamar.required'           => 'Nama Kamar tidak boleh kosong.',
        'kategori.required'             => 'Kategori harus dipilih.',
        'jenis_kamar.required'          => 'Jenis Kamar harus dipilih.',
        'bg_foto.required'              => 'Background Foto Kamar tidak boleh kosong.',
        'bg_foto.image'                 => 'Background Foto Kamar harus gambar.',
        'bg_foto.mimes'                 => 'Background Foto Kamar hanya mendukung .jpeg, .png, .jpg,',
        'bg_foto.max'                   => 'Ukuran File Background Foto Kamar tidak boleh lebih dari 2MB',
        'book.required'                 => 'Status Booking harus dipilih.',
        'luas_kamar.required'           => 'Luas Kamar tidak boleh kosong.',
        'stok_kamar.required'           => 'Stok Kamar tidak boleh kosong.',
        'stok_kamar.numeric'            => 'Stok Kamar hanya mendukung angka.',
        'harga_kamar.required'          => 'Harga Kamar tidak boleh kosong.',
        'harga_kamar.numeric'           => 'Harga Kamar hanya mendukung angka',
        'listrik.required'              => 'Biaya Listrik harus dipilih',
        'deposit.required'              => 'Biaya Deposit tidak boleh kosong',
        'deposit.numeric'               => 'Biaya Deposit hanya mendukung angka',
        'biaya_admin.required'          => 'Biaya Admin tidak boleh kosong',
        'biaya_admin.numeric'           => 'Biaya Admin hanya mendukung angka',
        // 'addmore[0][name].required'     => 'Fasilitas Kamar tidak boleh kosong.',
        // 'addkm[0][name].required'       => 'Fasilitas Kamar Mandi tidak boleh kosong.',
        // 'addbersama[0][name].required'  => 'Fasilitas Bersama tidak boleh kosong.',
        // 'addparkir[0][name].required'   => 'Fasilitas Parkir tidak boleh kosong.',
        // 'addarea[0][name].required'     => 'Area Lingkuangan tidak boleh kosong.',
        // 'addfoto[0][name].required'     => 'Foto Kamar tidak boleh kosong.',
        // 'addfoto[0][name].image'        => 'Foto Kamar hanya mendukung gamar',
        // 'addfoto[0][name].mimes'        => 'Foto Kamar hanya mendukung .jpeg, .png, .jpg',
        // 'addfoto[0][name].max'          => 'Ukuran File Foto Kamat tidak boleh lebih dari 2MB'
      ];
    }
}
