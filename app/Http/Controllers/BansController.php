<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Mobil;
use App\Modell;
use App\Ban;
use Session;

class BansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $bans = Ban::all();
            return Datatables::of($bans)
            ->addColumn('action', function($ban){
                return view('datatable._action', [
                    'model'=> $ban,
                    'form_url'=> route('bans.destroy', $ban->id),
                    'edit_url' => route('bans.edit', $ban->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $ban->sistem . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'ban', 'name'=>'ban', 'title'=>'Ban'])
        ->addColumn(['data' => 'roda', 'name'=>'roda', 'title'=>'Roda'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('ban.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ban.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,['ban'=>'',
                                    'mobil_id' => 'required|exists:mobils,id',
                                    'modell_id' => 'required|exists:modells,id',
                                    'roda'=>'',
                                    ]);
        $ban = Ban::create($request->all());
        Session::flash("flash_notification",[
                    "level" => "success",
                    "message" => "Berhasil Menyimpan $ban->ban"
                    ]);
        return redirect()->route('bans.index');
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
        $ban = ban::find($id);
        return view('ban.edit')->with(compact('ban'));
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
        $this->validate($request,['ban'=>'',
                                    'mobil_id' => 'required|exists:mobils,id',
                                    'modell_id' => 'required|exists:modells,id',
                                    'roda'=>'',
                                    ]);
        $ban = Ban::find($id);
        $ban->update($request->all());
        Session::flash("flash_notification",[
                    "level" => "success",
                    "message" => "Berhasil Menyimpan $ban->ban"
                    ]);
        return redirect()->route('bans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Ban::destroy($id)) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Model berhasil dihapus"
            ]);
        return redirect()->route('bans.index');
    }
}
