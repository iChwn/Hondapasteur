<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\Skeamanan;

class SkeamanansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $skeamanans = Skeamanan::all();
            return Datatables::of($skeamanans)
            ->addColumn('action', function($skeamanan){
                return view('datatable._action', [
                    'model'=> $skeamanan,
                    'form_url' => route('skeamanans.destroy', $skeamanan->id),
                    'edit_url' => route('skeamanans.edit', $skeamanan->id),
                    'confirm_message' => 'Yakin mau menghapus'. $skeamanan->tipe.'?'
                    ]);
            })->make(true);
        }
        $html=$htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'key_type', 'name'=>'key_type','title'=>'Key Type'])
        ->addColumn(['data' => 'keyless_entry', 'name'=>'keyless_entry','title'=>'Keyless Entry'])
        ->addColumn(['data' => 'immobilizer', 'name'=>'immobilizer','title'=>'Immobilizer'])
        ->addColumn(['data' => 'alarm_system', 'name'=>'alarm_system','title'=>'Alarm System'])
        ->addColumn(['data' => 'keyless_trunk_opener', 'name'=>'keyless_trunk_opener','title'=>'Keyless Trunk Opener'])
        ->addColumn(['data' => 'smart_entry', 'name'=>'smart_entry','title'=>'Smart Entry'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false,'searchable'=>false]);
        return view('skeamanan.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skeamanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['key_type' => '',
         'mobil_id' => 'required|exists:mobils,id',
         'modell_id' => 'required|exists:modells,id',
         'keyless_entry'=>'',
         'immobilizer'=>'',
         'alarm_system'=>'',
         'keyless_trunk_opener'=>'',
         'smart_entry'=>'',
         ]);
        $skeamanan = Skeamanan::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $skeamanan->key_type"
            ]);
        return redirect()->route('skeamanans.index');
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
        $skeamanan = Skeamanan::find($id);
        return view('skeamanan.edit')->with(compact('skeamanan'));
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
        $this->validate($request, ['key_type' => '',
         'mobil_id' => 'required|exists:mobils,id',
         'modell_id' => 'required|exists:modells,id',
         'keyless_entry'=>'',
         'immobilizer'=>'',
         'alarm_system'=>'',
         'keyless_trunk_opener'=>'',
         'smart_entry'=>'',
         ]);
        $skeamanan = Skeamanan::find($id);
        $skeamanan->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $skeamanan->key_type"
            ]);
        return redirect()->route('skeamanans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Skeamanan::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('skeamanans.index');
    }
}
