<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteriorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interiors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mobil_id')->unsigned();
            $table->integer('modell_id')->unsigned();
            $table->string('audio');
            $table->string('mil');
            $table->string('econ');
            $table->string('one_push_ignition_system');
            $table->string('leather_steering_shift_knob');
            $table->string('audio_steering_switch');
            $table->string('paddle_shift');
            $table->string('cruise_control');
            $table->string('auto_door_lock_by_speed');
            $table->string('power_window');
            $table->string('tweeter');
            $table->string('trunk_capacity');
            $table->string('green_glass');
            $table->string('driver_seat_heigh_adjuster');
            $table->string('front_rear_seat_reclining');
            $table->string('navi_system');
            $table->string('hft');
            $table->string('meter_cluster');
            $table->string('auto_dimming_rearview_mirror');
            $table->string('speed_sensitive_volume_compensation');
            $table->string('rear_ventilation_ac');
            $table->string('seat_trim_material');
            $table->string('active_noise_cancelation');
            $table->string('power_seat_adjustment');
            $table->string('driver_seat');
            $table->string('side_sunshade');
            $table->string('power_rear_sunshade');
            $table->string('rear_audio_switch_control');
            $table->string('auto_dimming_rear_view');
            $table->string('rear_seat_fold_down');
            $table->string('active_noise_cancellation');
            $table->string('automatic_ac');
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
        Schema::dropIfExists('interiors');
    }
}
