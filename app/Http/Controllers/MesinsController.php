<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesin;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class MesinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $mesins = Mesin::select(['id','mobil_id','modell_id','tipe','sistem_bbm','diameter_langkah','silinder','perbandingan_kompresi','daya_maksimum','momen_puntri_maksimum']);
            return Datatables::of($mesins)
            ->addColumn('action', function($mesin){
                return view('datatable._action', [
                    'model'=> $mesin,
                    'form_url'=> route('mesin.destroy', $mesin->id),
                    'edit_url' => route('mesin.edit', $mesin->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $mesin->nama . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'tipe', 'name'=>'tipe', 'title'=>'Tipe'])
        ->addColumn(['data' => 'sistem_bbm', 'name'=>'sistem_bbm', 'title'=>'Sistem BBM'])
        ->addColumn(['data' => 'diameter_langkah', 'name'=>'diameter_langkah', 'title'=>'Diameter Langkah'])
        ->addColumn(['data' => 'silinder', 'name'=>'silinder', 'title'=>'Silinder'])
        ->addColumn(['data' => 'perbandingan_kompresi', 'name'=>'perbandingan_kompresi', 'title'=>'Perbandingan Kompresi'])
        ->addColumn(['data' => 'daya_maksimum', 'name'=>'daya_maksimum', 'title'=>'Daya Maksimim'])
        ->addColumn(['data' => 'momen_puntri_maksimum', 'name'=>'momen_puntri_maksimum', 'title'=>'Momen Puntri Maksimum'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('mesin.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mesin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['tipe' => 'required|unique:mesins',
                                             'mobil_id' => 'required|exists:mobils,id',
                                             'modell_id' => 'required|exists:modells,id',
                                             'sistem_bbm'=>'',
                                             'diameter_langkah'=>'',
                                             'silinder'=>'',
                                             'perbandingan_kompresi'=>'',
                                             'daya_maksimum'=>'',
                                             'momen_puntri_maksimum'=>'']);
        $mesin = Mesin::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $mesin->tipe"
            ]);
        return redirect()->route('mesin.index');
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
        $mesin = Mesin::find($id);

        return view('mesin.edit')->with(compact('mesin'));
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
                                             'mobil_id' => '|exists:mobils,id',
                                             'modell_id' => '|exists:modells,id',
                                             'sistem_bbm'=>'',
                                             'diameter_langkah'=>'',
                                             'silinder'=>'',
                                             'perbandingan_kompresi'=>'',
                                             'daya_maksimum'=>'',
                                             'momen_puntri_maksimum'=>'']);
        $mesin = Mesin::find($id);
        $mesin->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $mesin->tipe"
            ]);
        return redirect()->route('mesin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Mesin::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('mesin.index');
    }
}
