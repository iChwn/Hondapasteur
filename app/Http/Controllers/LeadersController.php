<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Modell;
use App\Galeri;
use App\Leader;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\File;

class LeadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $leaders = Leader::select(['id','nama','jabatan','cover','link_fb','link_google']);
            return Datatables::of($leaders)
            ->addColumn('cover', function($leader){
                return '<img src="/img/'.$leader->cover. '" height="100px" width="200px">';
            })
            ->addColumn('action', function($leader){
                return view('datatable._action', [
                    'model'=> $leader,
                    'form_url'=> route('leaders.destroy', $leader->id),
                    'edit_url' => route('leaders.edit', $leader->id),
                    'confirm_message' => 'Yakin mau menghapus ' . $leader->nama . '?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'nama', 'name'=>'nama', 'title'=>'Nama'])
        ->addColumn(['data' => 'jabatan', 'name'=>'jabatan', 'title'=>'jabatan'])
        ->addColumn(['data' => 'link_fb', 'name'=>'link_fb', 'title'=>'Link FB'])
        ->addColumn(['data' => 'link_google', 'name'=>'link_google', 'title'=>'Link Google'])
        ->addColumn(['data' => 'cover', 'name'=>'cover', 'title'=>'Cover'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        return view('leaders.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leaders.create');
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
            'nama'=> 'required|unique:leaders,nama',
            'jabatan'=> 'required',
            'cover'=> 'image|max:2048'
            ]);
        $leader = Leader::create($request->except('cover'));
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
// mengisi field cover di leader dengan filename yang baru dibuat
            $leader->cover = $filename;
            $leader->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $leader->nama"
            ]);
        return redirect()->route('leaders.index');
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
        $leader = Leader::find($id);

        return view('leaders.edit')->with(compact('leader'));
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
            'nama'=> 'required|unique:leaders,nama,'.$id,
            'jabatan'=> 'required',
            'cover'=> 'image|max:2048'
            ]);
        $leader = Leader::find($id);
        $leader->update($request->all());
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
            if ($leader->cover) {
                $old_cover = $leader->cover;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
                . DIRECTORY_SEPARATOR . $leader->cover;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }
// ganti field cover dengan cover yang baru
            $leader->cover = $filename;
            $leader->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $leader->nama"
            ]);
        return redirect()->route('leaders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $leader = Leader::find($id);
// hapus cover lama, jika ada
        if ($leader->cover) {
            $old_cover = $leader->cover;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
            . DIRECTORY_SEPARATOR . $leader->cover;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $leader->delete();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"leader berhasil dihapus"
            ]);
        return redirect()->route('leaders.index');
    }
}
