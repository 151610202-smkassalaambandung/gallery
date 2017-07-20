<?php

use Illuminate\Database\Seeder;
use App\Pegawai;
use App\Barang;

class BarangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sample pegawai
        $pegawai1= Pegawai::create(['nama_pegawai'=>'Mohammad Ali']);
        $pegawai2= Pegawai::create(['nama_pegawai'=>'Asep']);
        $pegawai3= Pegawai::create(['nama_pegawai'=>'Aam Amiruddin ']);
        
        //Sample buku
        $barang1= Barang::create(['nama_barang'=>'AC','jumlah_barang'=>3,'harga'=>30000,'pegawai_id'=>$pegawai1->id]);
        $barang2= Barang::create(['nama_barang'=>'TV','jumlah_barang'=>3,'harga'=>40000,'pegawai_id'=>$pegawai2->id]);
       
    }
}
