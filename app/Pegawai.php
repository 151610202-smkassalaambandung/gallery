<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Pegawai extends Model
{
    //
    protected $fillable = ['nama_pegawai'];
     public function barangs()
 {
 	return $this->hasMany('App\Barang');
 }
 public static function boot()
 	{
 		parent::boot();

 		self::deleting(function($pegawai){
 			//mengecek apakah penulis masih punya buku
 			if($pegawai->barangs->count() > 0) {
 		    //menyiapkan error
 			$html = 'Pegawai tidak bisa dihapus karena masih mempunyai barang yang di stock:';
 			$html .='<ul>';
 			foreach ($pegawai->barangs as $barang) {
 				$html .="<li>$barang->title</li>";
 			}
 			$html .='</ul>';
 			Session::flash("flash_notification", ["level"=>"danger","message"=>$html]);
 			//membatalkan proses penghapusan
 			return false;
 			}
 		});
 	}
 
}
