<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\Fkeselamatan;

class FkeselamatansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $fkeselamatans = Fkeselamatan::all();
            return Datatables::of($fkeselamatans)
            ->addColumn('action', function($fkeselamatan){
                return view('datatable._action', [
                    'model'=> $fkeselamatan,
                    'form_url' => route('fkeselamatans.destroy', $fkeselamatan->id),
                    'edit_url' => route('fkeselamatans.edit', $fkeselamatan->id),
                    'confirm_message' => 'Yakin mau menghapus'. $fkeselamatan->tipe.'?'
                    ]);
            })->make(true);
        }
        $html=$htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'struktur_rangka_body', 'name'=>'struktur_rangka_body','title'=>'Struktur Rangka Body'])
        ->addColumn(['data' => 'side_impact_beam', 'name'=>'side_impact_beam','title'=>'Side Impact Beam'])
        ->addColumn(['data' => 'side_airbags', 'name'=>'side_airbags','title'=>'Side Airbags'])
        ->addColumn(['data' => 'side_curtain_airbags', 'name'=>'side_curtain_airbags','title'=>'Side Curtain Airbags'])
        ->addColumn(['data' => 'pedestrian_protection', 'name'=>'pedestrian_protection','title'=>'Pedestrian Protection'])
        ->addColumn(['data' => 'dual_front_srs_airbags', 'name'=>'dual_front_srs_airbags','title'=>'Dual Front Srs Airbags'])
        ->addColumn(['data' => 'sabuk_keselamatan_f', 'name'=>'sabuk_keselamatan_f','title'=>'Sabuk Keselamatan F'])
        ->addColumn(['data' => 'sabuk_keselamatan_r', 'name'=>'sabuk_keselamatan_r','title'=>'Sabuk Keselamatan R'])
        ->addColumn(['data' => 'pretensioner_load_limiter_seatbelt', 'name'=>'pretensioner_load_limiter_seatbelt','title'=>'Pretensioner Load Limiter Seatbelt'])
        ->addColumn(['data' => 'isofix_tether', 'name'=>'isofix_tether','title'=>'Isofix Tether'])
        ->addColumn(['data' => 'parking_sensor', 'name'=>'parking_sensor','title'=>'Parking Sensor'])
        ->addColumn(['data' => 'vsa', 'name'=>'vsa','title'=>'VSA'])
        ->addColumn(['data' => 'hill_start_assist', 'name'=>'hill_start_assist','title'=>'Hill Start Assist'])
        ->addColumn(['data' => 'emergency_stop_ignal', 'name'=>'emergency_stop_ignal','title'=>'Emergency Stop Ignal'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false,'searchable'=>false]);
        return view('fkeselamatan.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fkeselamatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['struktur_rangka_body' => '',
           'mobil_id' => 'required|exists:mobils,id',
           'modell_id' => 'required|exists:modells,id',
           'side_impact_beam'=>'',
           'side_airbags'=>'',
           'side_curtain_airbags'=>'',
           'pedestrian_protection'=>'',
           'dual_front_srs_airbags'=>'',
           'sabuk_keselamatan_f'=>'',
           'sabuk_keselamatan_r'=>'',
           'pretensioner_load_limiter_seatbelt'=>'',
           'isofix_tether'=>'',
           'parking_sensor'=>'',
           'vsa'=>'',
           'hill_start_assist'=>'',
           'emergency_stop_ignal'=>'',
           ]);
        $fkeselamatan = Fkeselamatan::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $fkeselamatan->struktur_rangka_body"
            ]);
        return redirect()->route('fkeselamatans.index');
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
         $fkeselamatan = Fkeselamatan::find($id);
        return view('fkeselamatan.edit')->with(compact('fkeselamatan'));
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
        $this->validate($request, ['struktur_rangka_body' => '',
           'mobil_id' => 'required|exists:mobils,id',
           'modell_id' => 'required|exists:modells,id',
           'side_impact_beam'=>'',
           'side_airbags'=>'',
           'side_curtain_airbags'=>'',
           'pedestrian_protection'=>'',
           'dual_front_srs_airbags'=>'',
           'sabuk_keselamatan_f'=>'',
           'sabuk_keselamatan_r'=>'',
           'pretensioner_load_limiter_seatbelt'=>'',
           'isofix_tether'=>'',
           'parking_sensor'=>'',
           'vsa'=>'',
           'hill_start_assist'=>'',
           'emergency_stop_ignal'=>'',
           ]);
        $fkeselamatan = Fkeselamatan::find($id);
        $fkeselamatan->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $fkeselamatan->struktur_rangka_body"
            ]);
        return redirect()->route('fkeselamatans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Fkeselamatan::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('fkeselamatans.index');
    }
}
