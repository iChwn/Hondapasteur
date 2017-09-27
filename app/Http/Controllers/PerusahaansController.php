<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Mobil;
use App\Modell;
use App\Leader;
use App\Poto;
use App\Perusahaan;
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
        $perusahaans = Perusahaan::select(['id','about','service','dekservice','motto','cover','cover2','cover3']);
        return Datatables::of($perusahaans)
        ->addColumn('cover', function($perusahaan){
            return '<img src="/img/img1/'.$perusahaan->cover. '" height="100px" width="200px">';
        })
        ->addColumn('cover2', function($perusahaan){
            return '<img src="/img/img2/'.$perusahaan->cover2. '" height="100px" width="200px">';
        })
        ->addColumn('cover3', function($perusahaan){
            return '<img src="/img/img3/'.$perusahaan->cover3. '" height="100px" width="200px">';
        })

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
    ->addColumn(['data' => 'cover', 'name'=>'cover', 'title'=>'Cover'])
    ->addColumn(['data' => 'cover2', 'name'=>'cover2', 'title'=>'Cover 2'])
    ->addColumn(['data' => 'cover3', 'name'=>'cover3', 'title'=>'Cover 3'])
    ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('perusahaans.index')->with(compact('html','mobilsa','modell','mobila','leader','poto','potoa','mobile','perusahaan','leadera'));
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
            'motto'=>'required',
            'cover'=> 'image|max:2048',
            'cover2'=> 'image|max:2048',
            'cover3'=> 'image|max:2048'
            ]);
        $poto = Perusahaan::find($id);
        $poto->update($request->all());
        if ($request->hasFile('cover','cover2','cover3')) {
// menambil cover yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_cover = $request->file('cover');
            $uploaded_cover2 = $request->file('cover2');
            $uploaded_cover3 = $request->file('cover3');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
            $extension2 = $uploaded_cover2->getClientOriginalExtension();
            $extension3 = $uploaded_cover3->getClientOriginalExtension();
// membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
            $filename2 = md5(time()) . '.' . $extension2;
            $filename3 = md5(time()) . '.' . $extension3;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/img1';
            $destinationPath2 = public_path() . DIRECTORY_SEPARATOR . 'img/img2';
            $destinationPath3 = public_path() . DIRECTORY_SEPARATOR . 'img/img3';
// memindahkan file ke folder public/img
            $uploaded_cover->move($destinationPath, $filename);
            $uploaded_cover2->move($destinationPath2, $filename2);
            $uploaded_cover3->move($destinationPath3, $filename3);
// hapus cover lama, jika ada
            if ($poto->cover) {
                $old_cover = $poto->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img1'
                . DIRECTORY_SEPARATOR . $poto->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }
            if ($poto->cover2) {
                $old_cover = $poto->cover2;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img2'
                . DIRECTORY_SEPARATOR . $poto->cover2;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }
            if ($poto->cover3) {
                $old_cover = $poto->cover3;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/img3'
                . DIRECTORY_SEPARATOR . $poto->cover3;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }
// ganti field cover dengan cover yang baru
            $poto->cover = $filename;
            $poto->cover2 = $filename2;
            $poto->cover3 = $filename3;
            $poto->save();
        }
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
