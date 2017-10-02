<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkeamanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skeamanans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobil_id')->unsigned();
            $table->integer('modell_id')->unsigned();
            $table->string('key_type');
            $table->string('keyless_entry');
            $table->string('immobilizer');
            $table->string('alarm_system');
            $table->string('keyless_trunk_opener');
            $table->string('smart_entry');
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
        Schema::dropIfExists('skeamanans');
    }
}
