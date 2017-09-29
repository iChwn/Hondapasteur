<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\Mobil;
use App\Modell;
use App\Skemudi;

class SkemudisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $skemudis = Skemudi::all();
            return Datatables::of($skemudis)
            ->addColumn('action', function($skemudi){
                return view('datatable._action', [
                    'model'=> $skemudi,
                    'form_url'=> route('skemudis.destroy', $skemudi->id),
                    'edit_url' => route('skemudis.edit', $skemudi->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $skemudi->sistem . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'sistem', 'name'=>'sistem', 'title'=>'Sistem'])
        ->addColumn(['data' => 'tilt_steering', 'name'=>'tilt_steering', 'title'=>'Tilt Steering'])
        ->addColumn(['data' => 'telescopic_steering', 'name'=>'telescopic_steering', 'title'=>'Telescopic Steering'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('skemudi.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skemudi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['sistem' => 'required|unique:skemudis',
                                             'mobil_id' => 'required|exists:mobils,id',
                                             'modell_id' => 'required|exists:modells,id',
                                             'tilt_steering'=>'',
                                             'telescopic_steering'=>''
                                             ]);
        $skemudi = Skemudi::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $skemudi->plt"
            ]);
        return redirect()->route('skemudis.index');
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
        $skemudi = Skemudi::find($id);
        return view('skemudi.edit')->with(compact('skemudi'));
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
        $this->validate($request, ['sistem' => 'required',
                                             'mobil_id' => 'required|exists:mobils,id',
                                             'modell_id' => 'required|exists:modells,id',
                                             'tilt_steering'=>'',
                                             'telescopic_steering'=>''
                                             ]);
        $skemudi = Skemudi::find($id);
        $skemudi->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $skemudi->sistem"
            ]);
        return redirect()->route('skemudis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Skemudi::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('skemudis.index');
    }
}
