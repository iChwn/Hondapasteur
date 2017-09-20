<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modell_id')->unsigned();
            $table->string('nama_mobil');
            $table->text('deskripsi');
            $table->text('spesifikasi')->nullable();
            $table->string('cover')->nullable();
            $table->integer('harga')->nullable();
            $table->timestamps();
            $table->foreign('modell_id')->references('id')->on('modells')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobils');
    }
}
