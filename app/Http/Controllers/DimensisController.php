<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\Mobil;
use App\Modell;
use App\Dimensi;

class DimensisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $dimensis = Dimensi::all();
            return Datatables::of($dimensis)
            ->addColumn('action', function($dimensi){
                return view('datatable._action', [
                    'model'=> $dimensi,
                    'form_url'=> route('dimensis.destroy', $dimensi->id),
                    'edit_url' => route('dimensis.edit', $dimensi->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $dimensi->plt . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'plt', 'name'=>'plt', 'title'=>'Panjang x Lebar x Tinggi'])
        ->addColumn(['data' => 'jarak_sumbu_roda', 'name'=>'jarak_sumbu_roda', 'title'=>'Jarak Sumbu Roda'])
        ->addColumn(['data' => 'jarak_pijak_db', 'name'=>'jarak_pijak_db', 'title'=>'Jarak Pijak Depan/Belakang'])
        ->addColumn(['data' => 'kapasitas_tangki', 'name'=>'kapasitas_tangki', 'title'=>'Kapasitas Tangki'])
        ->addColumn(['data' => 'berat_kosong', 'name'=>'berat_kosong', 'title'=>'Berat Kosong'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('dimensi.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dimensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['plt' => 'required|unique:dimensis',
                                             'mobil_id' => 'required|exists:mobils,id',
                                             'modell_id' => 'required|exists:modells,id',
                                             'jarak_sumbu_roda'=>'',
                                             'jarak_pijak_db'=>'',
                                             'silinder'=>'',
                                             'kapasitas_tangki'=>'',
                                             'berat_kosong'=>'']);
        $dimensi = Dimensi::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $dimensi->plt"
            ]);
        return redirect()->route('dimensis.index');
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
        $dimensi = Dimensi::find($id);
        return view('dimensi.edit')->with(compact('dimensi'));

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
        $this->validate($request, ['plt' => 'required|unique:dimensis',
                                             'mobil_id' => 'required|exists:mobils,id',
                                             'modell_id' => 'required|exists:modells,id',
                                             'jarak_sumbu_roda'=>'',
                                             'jarak_pijak_db'=>'',
                                             'silinder'=>'',
                                             'kapasitas_tangki'=>'',
                                             'berat_kosong'=>'']);
        $dimensi = Dimensi::find($id);
        $dimensi->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $dimensi->plt"
            ]);
        return redirect()->route('dimensis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Dimensi::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('dimensis.index');
    }
}
