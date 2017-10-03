<?php

use Illuminate\Database\Seeder;
use App\Modell;
use App\Mobil;
use App\Perusahaan;
use App\Mesin;
use App\Dimensi;



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
    	$model1 = Modell::create(['nama_model'=>'Honda Accord']);
    	$model2 = Modell::create(['nama_model'=>'Honda Brio']);
    	$model3 = Modell::create(['nama_model'=>'Honda BR-V']);
        $model4 = Modell::create(['nama_model'=>'Honda City']);
        $model5 = Modell::create(['nama_model'=>'Honda Civic']);
        $model6 = Modell::create(['nama_model'=>'Honda CR-V']);
        $model7 = Modell::create(['nama_model'=>'Honda HR_v']);
        $model8 = Modell::create(['nama_model'=>'Honda Jazz']);
        $model9 = Modell::create(['nama_model'=>'Honda Mobilio']);
        $model10 = Modell::create(['nama_model'=>'Honda Odyssey']);

		// Sample Mobil
        $mobil1 = Mobil::create(['nama_mobil'=>'Accord 2,4L VTi-L ES',
            'deskripsi'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'spesifikasi'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'cover'=>'null',
            'harga'=>'815650063',
            'modell_id'=>$model1->id]);
        $mobil2= Mobil::create(['nama_mobil'=>'Brio Satya S',
            'deskripsi'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'spesifikasi'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'cover'=>'null',
            'harga'=>'615650063',
            'modell_id'=>$model2->id]);
        $mobil2_2= Mobil::create(['nama_mobil'=>'Brio Satya E',
            'deskripsi'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'spesifikasi'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'cover'=>'null',
            'harga'=>'1000000',
            'modell_id'=>$model2->id]);
        $mobil3 = Mobil::create(['nama_mobil'=>'Honda BR-V S 6MT',
            'deskripsi'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'spesifikasi'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'cover'=>'null',
            'harga'=>'1210000',
            'modell_id'=>$model3->id]);

        //Perusahaan
        $perusahaan = Perusahaan::create(['about'=>'PT. Indosal Pasteur (Honda Pasteur) adalah authorized dealer untuk produk mobil Honda sejak tahun 1987. Kami bergerak di bidang otomotif yang berkelas secara keseluruhan yang memiliki fasilitas 3S, yaitu:

            ■  Sales  (Penjualan mobil Honda baru)
            ■  Service (Perawatan dan perbaikan mesin mobil Honda)
            ■  Sprare Part (Penjualan dan Penyediaan suku cadang)

            Kami sadar akan kebutuhan perusahaan dan kebutuhan pribadi yang berbeda-beda, oleh karena itu kami selalu membuat solusi khusus untuk memuaskan semua kebutuhan transportasi prestige anda.

            PT. Indosal Pasteur (Honda Pasteur) dijalankan berdasarkan konsep Total Customer Satisfaction, yang mengacu kepada kepuasan pelanggan sepenuhnya. Didukung dengan adanya fasilitas dealer resmi yang memenuhi semua standar internasional, setiap aspek dari bisnis kami adalah yang terbaik untuk kepuasan anda.

            Kami telah mengadakan kerjasama dengan banyak instasi seperti Bank NISP, Bank Central Asia, dan Bank Panin untuk opsi kepemilikan mobil bagi para karyawan instansi tersebut. Kami juga menyediakan solusi-solusi dan kemudahan bagi jajaran manajer perusahaan seperti Sanbe, Dewa Sutratex, Kahatex, dan lain lain.

            Percayakanlah kebutuhan transportasi anda pada nama Honda, dan hanya kami bisa mencarikan solusi ideal untuk memuaskan kebutuhan anda akan transportasi yang berkelas.',
            'service'=>'Mobil Sehat, Hati Tenang',
            'dekservice'=>'Kini semua mobil Honda akan semakin terlindungi dengan Paket Cermat ( Cerdas  + Hemat )

            yang memberikan beragam keuntungan dalam setiap perawatan berkala di deler resmi Honda.',
            'motto'=>'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'cover'=>'',
            'cover2'=>'',
            'cover3'=>''
            ]);

        //Mesin
        $mesin1 = Mesin::create(['modell_id'=>$model1->id,
            'mobil_id'=>$mobil1->id,
            'tipe'=>'In-Line 4-Cylinder, i-VTEC DOHC, 16-Valve',
            'sistem_bbm'=>'PGM-FI',
            'diameter_langkah'=>'87mm x 99,1mm',
            'silinder'=>'2356',
            'perbandingan_kompresi'=>'10,1:1',
            'daya_maksimum'=>'129,2 Kw (176 PS) / 6.200 rpm',
            'momen_puntri_maksimum'=>'22,6 kg.m (225Nm) /4.000 rpm
            ']);
        $mesin2 = Mesin::create(['modell_id'=>$model2->id,
            'mobil_id'=>$mobil2->id,
            'tipe'=>'1.2 L SOHC silinder segaris, 16 katup i-VTEC + DBW',
            'sistem_bbm'=>'PGM-FI',
            'diameter_langkah'=>'73mm x 71,6mm
            ',
            'silinder'=>'1198',
            'perbandingan_kompresi'=>'10,2:1',
            'daya_maksimum'=>'66Kw (90 PS) / 6.000 rpm',
            'momen_puntri_maksimum'=>'11,2 kg.m (110 Nm) / 4.800 rpm']);
        $mesin2_2 = Mesin::create(['modell_id'=>$model2->id,
            'mobil_id'=>$mobil3 ->id,
            'tipe'=>'1.2 L SOHC silinder segaris, 16 katup i-VTEC + DBW',
            'sistem_bbm'=>'PGM-FI',
            'diameter_langkah'=>'73mm x 71,6mm
            ',
            'silinder'=>'1198',
            'perbandingan_kompresi'=>'10,2:1',
            'daya_maksimum'=>'66Kw (90 PS) / 6.000 rpm',
            'momen_puntri_maksimum'=>'11,2 kg.m (110 Nm) / 4.800 rpm']);
        $mesin3 = Mesin::create(['modell_id'=>$model3->id,
            'mobil_id'=>$mobil3->id,
            'tipe'=>'1.5 L SOHC 4 Silinder Segaris, 16 katup i-VTEC + DBW',
            'sistem_bbm'=>'PGM-FI',
            'diameter_langkah'=>'73,0 x 89,4',
            'silinder'=>'1.497',
            'perbandingan_kompresi'=>'10,3 : 1',
            'daya_maksimum'=>'88(120) / 6.600
            ',
            'momen_puntri_maksimum'=>'14,8(145) / 4.600']);
        // $mesin1 = Mesin::create(['modell_id'=>$model->id,
        //                         'mobil_id'=>$mobil->id,
        //                         'tipe'=>'',
        //                         'sistem_bbm'=>'',
        //                         'diameter_langkah'=>'',
        //                         'silinder'=>'',
        //                         'perbandingan_kompresi'=>'',
        //                         'daya_maksimum'=>'',
        //                         'momen_puntri_maksimum'=>'']);


        //Dimensi/Ukuran
        $dimensi1 = Dimensi::create(['plt' => '4.870mm x 1.850mm x 1.465mm',
            'mobil_id' => $mobil1->id,
            'modell_id' => $model1->id,
            'jarak_sumbu_roda'=>'2.275',
            'jarak_pijak_db'=>'1.585mm / 1.585mm',
            'kapasitas_tangki'=>'65',
            'berat_kosong'=>'1.560kg']);
        $dimensi2 = Dimensi::create(['plt' => '3.640mm x 1.680mm x 1.485mm',
            'mobil_id' => $mobil2->id,
            'modell_id' => $model2->id,
            'jarak_sumbu_roda'=>'2.345',
            'jarak_pijak_db'=>'1.480mm / 1.465mm',
            'kapasitas_tangki'=>'35',
            'berat_kosong'=>'930kg']);
        $dimensi2_2 = Dimensi::create(['plt' => '3.640mm x 1.680mm x 1.485mm',
            'mobil_id' => $mobil2_2->id,
            'modell_id' => $model2->id,
            'jarak_sumbu_roda'=>'2.345',
            'jarak_pijak_db'=>'1.480mm / 1.465mm',
            'kapasitas_tangki'=>'35',
            'berat_kosong'=>'930kg']);
        // $dimensi = Dimensi::create(['plt' => '',
        //     'mobil_id' =>,
        //    'modell_id' =>,
        //    'jarak_sumbu_roda'=>'',
        //    'jarak_pijak_db'=>'',
        //    'kapasitas_tangki'=>'',
        //    'berat_kosong'=>'']);

    }
}
