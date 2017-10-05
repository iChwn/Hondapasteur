<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransmisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transmisis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobil_id')->unsigned();
            $table->integer('modell_id')->unsigned();
            $table->string('tipe');
            $table->string('no1');
            $table->string('no2');
            $table->string('no3');
            $table->string('no4');
            $table->string('no5');
            $table->string('no6');
            $table->string('reverse');
            $table->string('final_gear');
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
        Schema::dropIfExists('transmisis');
    }
}
