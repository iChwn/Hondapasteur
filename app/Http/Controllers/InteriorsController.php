<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\Interior;

class InteriorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $interiors = Interior::all();
            return Datatables::of($interiors)
            ->addColumn('action', function($interior){
                return view('datatable._action', [
                    'model'=> $interior,
                    'form_url' => route('interiors.destroy', $interior->id),
                    'edit_url' => route('interiors.edit', $interior->id),
                    'confirm_message' => 'Yakin mau menghapus'. $interior->audio.'?'
                    ]);
            })->make(true);
        }
        $html=$htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'audio', 'name'=>'audio','title'=>'Audio'])
        ->addColumn(['data' => 'mil', 'name'=>'mil','title'=>'Mil'])
        ->addColumn(['data' => 'econ', 'name'=>'econ','title'=>'Econ'])
        ->addColumn(['data' => 'one_push_ignition_system', 'name'=>'one_push_ignition_system','title'=>'One Push Ignition System'])
        ->addColumn(['data' => 'leather_steering_shift_knob', 'name'=>'leather_steering_shift_knob','title'=>'Leather Steering Shift Knob'])
        ->addColumn(['data' => 'audio_steering_switch', 'name'=>'audio_steering_switch','title'=>'Audio Steering Switch'])
        ->addColumn(['data' => 'paddle_shift', 'name'=>'paddle_shift','title'=>'Paddle Shift'])
        ->addColumn(['data' => 'cruise_control', 'name'=>'cruise_control','title'=>'Cruise Control'])
        ->addColumn(['data' => 'auto_door_lock_by_speed', 'name'=>'auto_door_lock_by_speed','title'=>'Auto Door Lock by Speed'])
        ->addColumn(['data' => 'power_window', 'name'=>'power_window','title'=>'Power Window'])
        ->addColumn(['data' => 'tweeter', 'name'=>'tweeter','title'=>'Tweeter'])
        ->addColumn(['data' => 'trunk_capacity', 'name'=>'trunk_capacity','title'=>'Trunk Capacity (liter)'])
        ->addColumn(['data' => 'green_glass', 'name'=>'green_glass','title'=>'Green Glass'])
        ->addColumn(['data' => 'driver_seat_heigh_adjuster', 'name'=>'driver_seat_heigh_adjuster','title'=>'Driver Seat Heigh Adjuster'])
        ->addColumn(['data' => 'front_rear_seat_reclining', 'name'=>'front_rear_seat_reclining','title'=>'Front Rear Seat Reclining'])
        ->addColumn(['data' => 'navi_system', 'name'=>'navi_system','title'=>'NAVI System'])
        ->addColumn(['data' => 'hft', 'name'=>'hft','title'=>'Hands-Free Telephone '])
        ->addColumn(['data' => 'meter_cluster', 'name'=>'meter_cluster','title'=>'Meter Cluster'])
        ->addColumn(['data' => 'auto_dimming_rearview_mirror', 'name'=>'auto_dimming_rearview_mirror','title'=>'Auto Dimming Rearview Mirror'])
        ->addColumn(['data' => 'speed_sensitive_volume_compensation', 'name'=>'speed_sensitive_volume_compensation','title'=>'Speed Sensitive Volume Compensation'])
        ->addColumn(['data' => 'rear_ventilation_ac', 'name'=>'rear_ventilation_ac','title'=>'Rear Ventilation AC'])
        ->addColumn(['data' => 'seat_trim_material', 'name'=>'seat_trim_material','title'=>'Seat Trim Material'])
        ->addColumn(['data' => 'active_noise_cancelation', 'name'=>'active_noise_cancelation','title'=>'Active Noise Cancelation'])
        ->addColumn(['data' => 'power_seat_adjustment', 'name'=>'power_seat_adjustment','title'=>'Power Seat Adjustment'])
        ->addColumn(['data' => 'driver_seat', 'name'=>'driver_seat','title'=>'Driver Seat'])
        ->addColumn(['data' => 'side_sunshade', 'name'=>'side_sunshade','title'=>'Side Sunshade'])
        ->addColumn(['data' => 'rear_audio_switch_control', 'name'=>'rear_audio_switch_control','title'=>'Rear Audio Switch Control'])
        ->addColumn(['data' => 'auto_dimming_rear_view', 'name'=>'auto_dimming_rear_view','title'=>'Auto Dimming Rear View'])
        ->addColumn(['data' => 'rear_seat_fold_down', 'name'=>'rear_seat_fold_down','title'=>'Rear Seat Fold Down'])
        ->addColumn(['data' => 'active_noise_cancellation', 'name'=>'active_noise_cancellation','title'=>'Active Noise Cancellation'])
        ->addColumn(['data' => 'automatic_ac', 'name'=>'automatic_ac','title'=>'Automatic AC'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false,'searchable'=>false]);
        return view('interior.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interior.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['audio' => '',
           'mobil_id' => 'required|exists:mobils,id',
           'modell_id' => 'required|exists:modells,id',
           'mil'=>'',
           'econ'=>'',
           'one_push_ignition_system'=>'',
           'leather_steering_shift_knob'=>'',
           'audio_steering_switch'=>'',
           'paddle_shift'=>'',
           'cruise_control'=>'',
           'auto_door_lock_by_speed'=>'',
           'power_window'=>'',
           'tweeter'=>'',
           'trunk_capacity'=>'',
           'green_glass'=>'',
           'driver_seat_heigh_adjuster'=>'',
           'front_rear_seat_reclining'=>'',
           'navi_system'=>'',
           'hft'=>'',
           'meter_cluster'=>'',
           'auto_dimming_rearview_mirror'=>'',
           'speed_sensitive_volume_compensation'=>'',
           'rear_ventilation_ac'=>'',
           'seat_trim_material'=>'',
           'active_noise_cancelation'=>'',
           'power_seat_adjustment'=>'',
           'driver_seat'=>'',
           'side_sunshade'=>'',
           'power_rear_sunshade'=>'',
           'rear_audio_switch_control'=>'',
           'auto_dimming_rear_view'=>'',
           'rear_seat_fold_down'=>'',
           'active_noise_cancellation'=>'',
           'automatic_ac'=>'',]);
        $interior = Interior::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $interior->plt"
            ]);
        return redirect()->route('interiors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $interior = Interior::find($id);
        return view('interior.edit')->with(compact('interior'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, ['audio' => '',
           'mobil_id' => 'required|exists:mobils,id',
           'modell_id' => 'required|exists:modells,id',
           'mil'=>'',
           'econ'=>'',
           'one_push_ignition_system'=>'',
           'leather_steering_shift_knob'=>'',
           'audio_steering_switch'=>'',
           'paddle_shift'=>'',
           'cruise_control'=>'',
           'auto_door_lock_by_speed'=>'',
           'power_window'=>'',
           'tweeter'=>'',
           'trunk_capacity'=>'',
           'green_glass'=>'',
           'driver_seat_heigh_adjuster'=>'',
           'front_rear_seat_reclining'=>'',
           'navi_system'=>'',
           'hft'=>'',
           'meter_cluster'=>'',
           'auto_dimming_rearview_mirror'=>'',
           'speed_sensitive_volume_compensation'=>'',
           'rear_ventilation_ac'=>'',
           'seat_trim_material'=>'',
           'active_noise_cancelation'=>'',
           'power_seat_adjustment'=>'',
           'driver_seat'=>'',
           'side_sunshade'=>'',
           'power_rear_sunshade'=>'',
           'rear_audio_switch_control'=>'',
           'auto_dimming_rear_view'=>'',
           'rear_seat_fold_down'=>'',
           'active_noise_cancellation'=>'',
           'automatic_ac'=>'',]);
        $interior = Interior::find($id);
        $interior->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $interior->plt"
            ]);
        return redirect()->route('interiors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Interior::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('interiors.index');
    }
}
