<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Perusahaan;
use App\Modell;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class PerusahaansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $perusahaans = Perusahaan::select(['id','about','service','dekservice','motto']);
            return Datatables::of($perusahaans)
            ->addColumn('action', function($perusahaan){
                return view('datatable._action', [
                    'model'=> $perusahaan,
                    'form_url'=> route('perusahaans.destroy', $perusahaan->id),
                    'edit_url'=> route('perusahaans.edit', $perusahaan->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $perusahaan->title . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'about', 'name'=>'about', 'title'=>'About'])
        ->addColumn(['data' => 'service', 'name'=>'service', 'title'=>'Service'])
        ->addColumn(['data' => 'dekservice', 'name'=>'dekservice', 'title'=>'Deskripsi service'])
        ->addColumn(['data' => 'motto', 'name'=>'motto', 'title'=>'Motto'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
        return view('perusahaans.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $perusahaan = Perusahaan::find($id);
        return view('perusahaans.edit')->with(compact('perusahaan'));
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
        $this->validate($request, ['about' => 'required|unique:perusahaans,about,'. $id,
                                    'service'=>'required',
                                    'dekservice'=>'required',
                                    'motto'=>'required'
                                    ]);
        $perusahaan = perusahaan::find($id);
        $perusahaan->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan Data"
            ]);
        return redirect()->route('perusahaans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
