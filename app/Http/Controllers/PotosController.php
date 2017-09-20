<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poto;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Facades\File;
use App\Mobil;

class PotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $potos = Poto::select(['id','cover','mobil_id']);
            return Datatables::of($potos)
            ->addColumn('cover', function($mobil){
                return '<img src="/img/'.$mobil->cover. '" height="100px" width="200px">';
            })
            ->addColumn('action', function($poto){
                return view('datatable._action', [
                    'model'=> $poto,
                    'form_url'=> route('potos.destroy', $poto->id),
                    'edit_url' => route('potos.edit', $poto->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $poto->cover . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'mobil_id', 'name'=>'mobil_id', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'cover', 'name'=>'cover', 'title'=>'Cover'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('potos.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('potos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mobil_id' => 'required|exists:mobils,id',
            'cover'=> 'image|max:2048'
            ]);
        $poto = Poto::create($request->except('cover'));
// isi field cover jika ada cover yang diupload
        if ($request->hasFile('cover')) {
// Mengambil file yang diupload
            $uploaded_cover = $request->file('cover');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
            $uploaded_cover->move($destinationPath, $filename);
// mengisi field cover di poto dengan filename yang baru dibuat
            $poto->cover = $filename;
            $poto->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $poto->cover"
            ]);
        return redirect()->route('potos.index');
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
        $poto=Poto::find($id);
        return view('potos.edit')->with(compact('poto'));
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
        $this->validate($request, [
            
            'mobil_id' => 'required|exists:potos,id',

            'cover'=> 'image|max:2048'
            ]);
        $poto = poto::find($id);
        $poto->update($request->all());
        if ($request->hasFile('cover')) {
// menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_cover = $request->file('cover');
            $extension = $uploaded_cover->getClientOriginalExtension();
// membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
// memindahkan file ke folder public/img
            $uploaded_cover->move($destinationPath, $filename);
// hapus cover lama, jika ada
            if ($poto->cover) {
                $old_cover = $poto->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
                . DIRECTORY_SEPARATOR . $poto->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }
// ganti field cover dengan cover yang baru
            $poto->cover = $filename;
            $poto->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $poto->nama_poto"
            ]);
        return redirect()->route('potos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poto = Poto::find($id);
// hapus cover lama, jika ada
        if ($poto->cover) {
            $old_cover = $poto->cover;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $poto->cover;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $poto->delete();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"poto berhasil dihapus"
            ]);
        return redirect()->route('potos.index');
    }
}
