<?php

use Illuminate\Database\Seeder;
use App\Modell;
use App\Mobil;
use App\Galeri;



class MobilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample Model
    	$model1 = Modell::create(['nama_model'=>'A']);
    	$model2 = Modell::create(['nama_model'=>'B']);
    	$model3 = Modell::create(['nama_model'=>'C']);
		// Sample Mobil
    	$mobil1 = Mobil::create(['nama_mobil'=>'A1','deskripsi'=>'A2','spesifikasi'=>'null_1','cover'=>'null','harga'=>'100','modell_id'=>$model1->id]);
    	$mobil2= Mobil::create(['nama_mobil'=>'A2','deskripsi'=>'A3','spesifikasi'=>'null_1','cover'=>'null','harga'=>'1000','modell_id'=>$model2->id]);
    	$mobil3 = Mobil::create(['nama_mobil'=>'A3','deskripsi'=>'A4','spesifikasi'=>'null_1','cover'=>'null','harga'=>'10000','modell_id'=>$model3->id]);
    	$mobil4 = Mobil::create(['nama_mobil'=>'A4','deskripsi'=>'A1','spesifikasi'=>'null_1','cover'=>'null','harga'=>'100000','modell_id'=>$model1->id]);
    	// Sample Galerry
    	// $galerry = Galeri::create(['gambar_1'=>'null','mobil_id'=>$mobil1->id]);
    	// $galerry = Galeri::create(['gambar_1'=>'null','mobil_id'=>$mobil2->id]);
    	// $galerry = Galeri::create(['gambar_1'=>'null','mobil_id'=>$mobil3->id]);
    	// Sample Spesifikasi
    	// $spek = Spesifikasi::create(['tipe'=>'AA','sistem_suplai_bahan_bakar'=>'BB','mobil_id'=>$mobil1->id]);
    	// $spek = Spesifikasi::create(['tipe'=>'BB','sistem_suplai_bahan_bakar'=>'BB','mobil_id'=>$mobil2->id]);
    	// $spek = Spesifikasi::create(['tipe'=>'CC','sistem_suplai_bahan_bakar'=>'BB','mobil_id'=>$mobil3->id]);

    }
}
