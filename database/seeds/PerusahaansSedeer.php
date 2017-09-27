<?php

use Illuminate\Database\Seeder;
use App\Perusahaan;

class PerusahaansSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample Perusahaan
        $model1 = Perusahaan::create(['about'=>'null','service'=>'null','dekservice'=>'null','motto'=>'null']);
    }
}
