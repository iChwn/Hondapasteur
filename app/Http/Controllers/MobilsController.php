<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Mobil;
use App\Modell;
use Session;
use App\Leader;
use App\Poto;
use App\Perusahaan;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreBookRequest;

class MobilsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        $mobila = Mobil::orderBy('created_at','desc')->take(3)->get();
       $potoa = Poto::orderBy('created_at','desc')->take(1)->get();
       $poto = Poto::orderBy('created_at','desc')->take(3)->get();
       $mobilsa = Mobil::orderBy('created_at','desc')->paginate(5);
       $leader = Leader::orderBy('created_at','asc')->paginate(5);
       $leadera = Leader::orderBy('created_at','asc')->paginate(1);
       $modell = Modell::all();
       $mobile = Mobil::all();
       $perusahaan = Perusahaan::all();

        if ($request->ajax()) {
            $mobils = Mobil::with('modell');
            return Datatables::of($mobils)
            ->addColumn('cover', function($mobil){
                return '<img src="/img/'.$mobil->cover. '" height="100px" width="200px">';
            })
            ->addColumn('action', function($mobil){
                return view('datatable._action', [
                    'model'=> $mobil,
                    'form_url'=> route('mobils.destroy', $mobil->id),
                    'edit_url'=> route('mobils.edit', $mobil->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $mobil->title . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama_mobil', 'name'=>'nama_mobil', 'title'=>'Nama Mobil'])
        ->addColumn(['data' => 'modell.nama_model', 'name'=>'modell.nama_model', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'harga', 'name'=>'harga', 'title'=>'Harga'])
        ->addColumn(['data' => 'deskripsi', 'name'=>'deskripsi', 'title'=>'Deskripsi'])
        ->addColumn(['data' => 'spesifikasi', 'name'=>'spesifikasi', 'title'=>'Spesifikasi'])
        ->addColumn(['data' => 'cover', 'name'=>'cover', 'title'=>'Cover'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
        return view('mobils.index')->with(compact('html','mobilsa','modell','mobila','leader','poto','potoa','mobile','perusahaan','leadera')); //guest.testingadmin
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobils.create');
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
            'nama_mobil'=> 'required|unique:mobils,nama_mobil',
            'modell_id' => 'required|exists:modells,id',
            'harga'=> 'required|numeric',
            'deskripsi' => 'required',
            'spesifikasi' => 'required',
            'cover'=> 'image|max:2048'
            ]);
        $mobil = Mobil::create($request->except('cover'));
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
// mengisi field cover di mobil dengan filename yang baru dibuat
            $mobil->cover = $filename;
            $mobil->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $mobil->nama_mobil"
            ]);
        return redirect()->route('mobils.index');
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
        $mobil = Mobil::find($id);

        return view('mobils.edit')->with(compact('mobil'));
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
            'nama_mobil'=> 'required|unique:mobils,nama_mobil,'.$id,
            'modell_id' => 'required|exists:modells,id',
            'harga'=> 'required|numeric',
            'deskripsi' => 'required',
            'spesifikasi' => 'required',
            'cover'=> 'image|max:2048'
            ]);
        $mobil = Mobil::find($id);
        $mobil->update($request->all());
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
            if ($mobil->cover) {
                $old_cover = $mobil->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
                . DIRECTORY_SEPARATOR . $mobil->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }
// ganti field cover dengan cover yang baru
            $mobil->cover = $filename;
            $mobil->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $mobil->nama_mobil"
            ]);
        return redirect()->route('mobils.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = Mobil::find($id);
// hapus cover lama, jika ada
        if ($mobil->cover) {
            $old_cover = $mobil->cover;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $mobil->cover;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $mobil->delete();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Mobil berhasil dihapus"
            ]);
        return redirect()->route('mobils.index');
    }
}
