<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEksteriorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eksteriors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobil_id')->unsigned();
            $table->integer('modell_id')->unsigned();
            $table->string('front_lamp');
            $table->string('fog_lamp');
            $table->string('door_mirror');
            $table->string('door_handle');
            $table->string('led_high_mount_stop_lamp');
            $table->string('exhaust_pipe_finisher');
            $table->string('glass_print_antenna');
            $table->string('auto_wiper');
            $table->string('hydrophillic_mirror');
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
        Schema::dropIfExists('eksteriors');
    }
}
