<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Facades\File;
use App\Mobil;
use App\Leader;
use App\Poto;
use App\Perusahaan;
use App\Modell;

class PotosController extends Controller
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
       $modell = Modell::with('poto');
       $mobile = Mobil::all();
       $perusahaan = Perusahaan::all();
       $potos =Poto::all();

        if ($request->ajax()) {
            $potos = Poto::select(['id','cover','cover2','cover3','mobil_id']);
            return Datatables::of($potos)
            ->addColumn('cover', function($poto){
                return '<img src="/img/img1/'.$poto->cover. '" height="100px" width="200px">';
            })
            ->addColumn('cover2', function($poto){
                return '<img src="/img/img2/'.$poto->cover2. '" height="100px" width="200px">';
            })
            ->addColumn('cover3', function($poto){
                return '<img src="/img/img3/'.$poto->cover3. '" height="100px" width="200px">';
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
        ->addColumn(['data' => 'cover2', 'name'=>'cover2', 'title'=>'Cover 2'])
        ->addColumn(['data' => 'cover3', 'name'=>'cover3', 'title'=>'Cover 3'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('potos.index')->with(compact('html','mobilsa','modell','mobila','leader','poto','potoa','mobile','perusahaan','leadera','potos'));
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
            'cover'=> 'image|max:2048',
            'cover2'=> 'image|max:2048',
            'cover3'=> 'image|max:2048'
            ]);
        $poto = Poto::create($request->except('cover'));
// isi field cover jika ada cover yang diupload
        if ($request->hasFile('cover','cover2','cover3')) {
// Mengambil file yang diupload
            $uploaded_cover = $request->file('cover');
            $uploaded_cover2 = $request->file('cover2');
            $uploaded_cover3 = $request->file('cover3');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
            $extension2 = $uploaded_cover2->getClientOriginalExtension();
            $extension3 = $uploaded_cover3->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
            $filename2 = md5(time()) . '.' . $extension2;
            $filename3 = md5(time()) . '.' . $extension3;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img1';
            $destinationPath2 = public_path() . DIRECTORY_SEPARATOR . 'img/img2';
            $destinationPath3 = public_path() . DIRECTORY_SEPARATOR . 'img/img3';
            $uploaded_cover->move($destinationPath, $filename);
            $uploaded_cover2->move($destinationPath2, $filename2);
            $uploaded_cover3->move($destinationPath3, $filename3);
// mengisi field cover di poto dengan filename yang baru dibuat
            $poto->cover = $filename;
            $poto->cover2 = $filename2;
            $poto->cover3 = $filename3;
            $poto->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan"
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
        $poto1 = Poto::find($id);
// hapus cover lama, jika ada
        if ($poto1->cover) {
            $old_cover = $poto1->cover;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img1'
            . DIRECTORY_SEPARATOR . $poto1->cover;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $poto2 = Poto::find($id);
// hapus cover lama, jika ada
        if ($poto2->cover2) {
            $old_cover = $poto2->cover2;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img2'
            . DIRECTORY_SEPARATOR . $poto2->cover2;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $poto3 = Poto::find($id);
// hapus cover lama, jika ada
        if ($poto3->cover3) {
            $old_cover = $poto3->cover3;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img3'
            . DIRECTORY_SEPARATOR . $poto3->cover3;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $poto3->delete();
        $poto2->delete();
        $poto1->delete();

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"poto berhasil dihapus"
            ]);
        return redirect()->route('potos.index');
    }
}
