<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\Transmisi;

class TransmisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $transmisis = Transmisi::all();
            return Datatables::of($transmisis)
            ->addColumn('action', function($transmisi){
                return view('datatable._action', [
                    'model'=> $transmisi,
                    'form_url' => route('transmisis.destroy', $transmisi->id),
                    'edit_url' => route('transmisis.edit', $transmisi->id),
                    'confirm_message' => 'Yakin mau menghapus'. $transmisi->tipe.'?'
                    ]);
            })->make(true);
        }
        $html=$htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'tipe', 'name'=>'tipe','title'=>'Tipe'])
        ->addColumn(['data' => 'no1', 'name'=>'no1','title'=>'1'])
        ->addColumn(['data' => 'no2', 'name'=>'no2','title'=>'2'])
        ->addColumn(['data' => 'no3', 'name'=>'no3','title'=>'3'])
        ->addColumn(['data' => 'no4', 'name'=>'no4','title'=>'4'])
        ->addColumn(['data' => 'no5', 'name'=>'no5','title'=>'5'])
        ->addColumn(['data' => 'no6', 'name'=>'no6','title'=>'6'])
        ->addColumn(['data' => 'reverse', 'name'=>'reverse','title'=>'Reverse'])
        ->addColumn(['data' => 'final_gear', 'name'=>'final_gear','title'=>'Final Gear'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false,'searchable'=>false]);
        return view('transmisi.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transmisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['tipe' => 'required|unique:transmisis',
                                             'mobil_id' => 'required|exists:mobils,id',
                                             'modell_id' => 'required|exists:modells,id',
                                             'no1'=>'',
                                             'no2'=>'',
                                             'no3'=>'',
                                             'no4'=>'',
                                             'no5'=>'',
                                             'no6'=>'',
                                             'reverse'=>'',
                                             'final_gear'=>'']);
        $transmisi = Transmisi::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $transmisi->plt"
            ]);
        return redirect()->route('transmisis.index');
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
        $transmisi = Transmisi::find($id);
        return view('transmisi.edit')->with(compact('transmisi'));
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
        $this->validate($request, ['tipe' => 'required',
                                             'mobil_id' => 'required|exists:mobils,id',
                                             'modell_id' => 'required|exists:modells,id',
                                             'no1'=>'',
                                             'no2'=>'',
                                             'no3'=>'',
                                             'no4'=>'',
                                             'no5'=>'',
                                             'no6'=>'',
                                             'reverse'=>'',
                                             'final_gear'=>'']);
        $transmisi = Transmisi::find($id);
        $transmisi->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $transmisi->plt"
            ]);
        return redirect()->route('transmisis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Transmisi::destroy($id)) return redirect()->back();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('transmisis.index');
    }
}
