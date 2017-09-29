<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use App\mobil;
use App\Modell;
use App\Srem;

class SremsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $srems = Srem::all();
            return Datatables::of($srems)
            ->addColumn('action', function($srem){
                return view('datatable._action', [
                    'model'=> $srem,
                    'form_url'=> route('srems.destroy', $srem->id),
                    'edit_url' => route('srems.edit', $srem->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $srem->sistem . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'absebd', 'name'=>'absebd', 'title'=>'ABS + EBD'])
        ->addColumn(['data' => 'brake_assist', 'name'=>'brake_assist', 'title'=>'Brake Assist'])
        ->addColumn(['data' => 'rem_depan', 'name'=>'rem_depan', 'title'=>'Rem Depan'])
        ->addColumn(['data' => 'rem_belakang', 'name'=>'rem_belakang', 'title'=>'Rem Belakang'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('rem.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['absebd' => '',
           'mobil_id' => 'required|exists:mobils,id',
           'modell_id' => 'required|exists:modells,id',
           'absebd'=>'',
           'brake_assist'=>'',
           'rem_depan'=>'',
           'rem_belakang'=>'']);
        $srem = Srem::create($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $srem->absebd"
            ]);
        return redirect()->route('srems.index');
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
      $srem = Srem::find($id);
      return view('rem.edit')->with(compact('srem'));
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
        $this->validate($request, ['absebd' => '',
           'mobil_id' => 'required|exists:mobils,id',
           'modell_id' => 'required|exists:modells,id',
           'absebd'=>'',
           'brake_assist'=>'',
           'rem_depan'=>'',
           'rem_belakang'=>'']);
        $srem = Srem::find($id);
        $srem->update($request->all());
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $srem->absebd"
            ]);
        return redirect()->route('srems.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if(!Srem::destroy($id)) return redirect()->back();
       Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Model berhasil dihapus"
        ]);
       return redirect()->route('srems.index');
   }
}
