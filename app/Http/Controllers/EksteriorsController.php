<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\Eksterior;

class EksteriorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $eksteriors = Eksterior::all();
            return Datatables::of($eksteriors)
            ->addColumn('action', function($eksterior){
                return view('datatable._action', [
                    'model'=> $eksterior,
                    'form_url' => route('eksteriors.destroy', $eksterior->id),
                    'edit_url' => route('eksteriors.edit', $eksterior->id),
                    'confirm_message' => 'Yakin mau menghapus'. $eksterior->tipe.'?'
                    ]);
            })->make(true);
        }
        $html=$htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'front_lamp', 'name'=>'front_lamp','title'=>'Front Lamp'])
        ->addColumn(['data' => 'fog_lamp', 'name'=>'fog_lamp','title'=>'Fog Lamp'])
        ->addColumn(['data' => 'door_mirror', 'name'=>'door_mirror','title'=>'Door Mirror'])
        ->addColumn(['data' => 'door_handle', 'name'=>'door_handle','title'=>'Door Handle'])
        ->addColumn(['data' => 'led_high_mount_stop_lamp', 'name'=>'led_high_mount_stop_lamp','title'=>'LED High Mount Stop Lamp'])
        ->addColumn(['data' => 'exhaust_pipe_finisher', 'name'=>'exhaust_pipe_finisher','title'=>'Exhaust Pipe Finisher'])
        ->addColumn(['data' => 'glass_print_antenna', 'name'=>'glass_print_antenna','title'=>'Glass Print Antenna'])
        ->addColumn(['data' => 'auto_wiper', 'name'=>'auto_wiper','title'=>'Auto Wiper'])
        ->addColumn(['data' => 'hydrophillic_mirror', 'name'=>'hydrophillic_mirror','title'=>'Hydrophillic Mirror'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false,'searchable'=>false]);
        return view('eksterior.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eksterior.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['front_lamp' => '',
         'mobil_id' => 'required|exists:mobils,id',
         'modell_id' => 'required|exists:modells,id',
         'fog_lamp'=>'',
         'door_mirror'=>'',
         'door_handle'=>'',
         'led_high_mount_stop_lamp'=>'',
         'exhaust_pipe_finisher'=>'',
         'glass_print_antenna'=>'',
         'auto_wiper'=>'',
         'hydrophillic_mirror'=>'']);
        $eksterior = Eksterior::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $eksterior->front_lamp"
            ]);
        return redirect()->route('eksteriors.index');
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
        $eksterior = Eksterior::find($id);
        return view('eksterior.edit')->with(compact('eksterior'));
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
        $this->validate($request, ['front_lamp' => '',
         'mobil_id' => 'required|exists:mobils,id',
         'modell_id' => 'required|exists:modells,id',
         'fog_lamp'=>'',
         'door_mirror'=>'',
         'door_handle'=>'',
         'led_high_mount_stop_lamp'=>'',
         'exhaust_pipe_finisher'=>'',
         'glass_print_antenna'=>'',
         'auto_wiper'=>'',
         'hydrophillic_mirror'=>'']);
        $eksterior = Eksterior::find($id);
        $eksterior->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $eksterior->front_lamp"
            ]);
        return redirect()->route('eksteriors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Eksterior::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('eksteriors.index');
    }
}
