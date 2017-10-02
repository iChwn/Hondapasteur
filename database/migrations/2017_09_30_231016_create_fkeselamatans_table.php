<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkeselamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fkeselamatans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobil_id')->unsigned();
            $table->integer('modell_id')->unsigned();
            $table->string('struktur_rangka_body');
            $table->string('side_impact_beam');
            $table->string('side_airbags');
            $table->string('side_curtain_airbags');
            $table->string('pedestrian_protection');
            $table->string('dual_front_srs_airbags');
            $table->string('sabuk_keselamatan_f');
            $table->string('sabuk_keselamatan_r');
            $table->string('pretensioner_load_limiter_seatbelt');
            $table->string('isofix_tether');
            $table->string('parking_sensor');
            $table->string('vsa');
            $table->string('hill_start_assist');
            $table->string('emergency_stop_ignal');
            $table->foreign('mobil_id')->references('id')->on('mobils')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('modell_id')->references('id')->on('modells')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fkeselamatans');
    }
}
