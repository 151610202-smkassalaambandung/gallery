<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = ['nama_barang','pegawai_id','jumlah_barang','harga'];
     public function pegawais()
 {
 	return $this->belongsTo('App\Pegawai');
 }
}
