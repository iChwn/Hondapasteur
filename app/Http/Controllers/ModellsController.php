<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modell;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Str;

class ModellsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $models = Modell::select(['id','nama_model','deskripsi']);
            return Datatables::of($models)
            ->addColumn('action', function($model){
                return view('datatable._action', [
                    'model'=> $model,
                    'form_url'=> route('models.destroy', $model->id),
                    'edit_url' => route('models.edit', $model->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $model->nama_model . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama_model', 'name'=>'nama_model', 'title'=>'Nama Model'])
        // ->addColumn(['data' => 'deskripsi', 'name'=>'deskripsi', 'title'=>'Deskripsi'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('models.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('models.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $tambah = new Modell();
        $tambah->nama_model = $request->get('nama_model');
        //Judul kita jadikan slug
        $tambah->slug = Str::slug($request->get('nama_model'));
        $tambah->deskripsi = $request->get('deskripsi');
        $tambah->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $tambah->nama_model"
            ]);
        return redirect()->route('models.index');
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
        $model = Modell::find($id);
        return view('models.edit')->with(compact('model'));
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
        $this->validate($request, ['nama_model' => 'required|unique:modells,nama_model,'. $id,'deskripsi'=>'']);
        $model = Modell::find($id);
        $model->update($request->only('nama_model','deskripsi'));
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $model->nama_model"
            ]);
        return redirect()->route('models.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Modell::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('models.index');
    }
}
