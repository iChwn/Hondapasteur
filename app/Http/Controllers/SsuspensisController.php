<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Mobil;
use App\Modell;
use App\Ssuspensi;
use Session;

class SsuspensisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $ssuspensis = Ssuspensi::all();
            return Datatables::of($ssuspensis)
            ->addColumn('action', function($ssuspensi){
                return view('datatable._action', [
                    'model'=> $ssuspensi,
                    'form_url'=> route('ssuspensis.destroy', $ssuspensi->id),
                    'edit_url' => route('ssuspensis.edit', $ssuspensi->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $ssuspensi->sistem . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'suspensi_depan', 'name'=>'suspensi_depan', 'title'=>'Suspensi Depan'])
        ->addColumn(['data' => 'suspensi_belakang', 'name'=>'suspensi_belakang', 'title'=>'Suspensi Belakang'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('ssuspensi.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ssuspensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['suspensi_depan'=>'',
                                    'mobil_id' => 'required|exists:mobils,id',
                                    'modell_id' => 'required|exists:modells,id',
                                    'suspensi_belakang'=>'',
                                    ]);
        $ssuspensi = Ssuspensi::create($request->all());
        Session::flash("flash_notification",[
                    "level" => "success",
                    "message" => "Berhasil Menyimpan $ssuspensi->suspensi_depan"
                    ]);
        return redirect()->route('ssuspensis.index');
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
        $ssuspensi = Ssuspensi::find($id);
        return view('ssuspensi.edit')->with(compact('ssuspensi'));
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
        $this->validate($request,['suspensi_depan'=>'',
                                    'mobil_id' => 'required|exists:mobils,id',
                                    'modell_id' => 'required|exists:modells,id',
                                    'suspensi_belakang'=>'',
                                    ]);
        $ssuspensi = Ssuspensi::find($id);
        $ssuspensi->update($request->all());
        Session::flash("flash_notification",[
                    "level" => "success",
                    "message" => "Berhasil Menyimpan $ssuspensi->suspensi_depan"
                    ]);
        return redirect()->route('ssuspensis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Ssuspensi::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('ssuspensis.index');
    }
}
