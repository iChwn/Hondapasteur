<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntereksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intereks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modell_id')->unsigned();
            $table->string('in1')->nullable();
            $table->string('in2')->nullable();
            $table->string('in3')->nullable();
            $table->string('ek1')->nullable();
            $table->string('ek2')->nullable();
            $table->string('ek3')->nullable();
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
        Schema::dropIfExists('intereks');
    }
}
