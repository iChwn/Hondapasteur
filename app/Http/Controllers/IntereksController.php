<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Facades\File;
use App\Modell;
use App\Intereks;

class IntereksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {

        if ($request->ajax()) {
            $intereks = Intereks::all();
            return Datatables::of($intereks)
            ->addColumn('in1', function($interek){
                return '<img src="/img/intereks/interior1/'.$interek->in1. '" height="100px" width="200px">';
            })
            ->addColumn('in2', function($interek){
                return '<img src="/img/intereks/interior2/'.$interek->in2. '" height="100px" width="200px">';
            })
            ->addColumn('in3', function($interek){
                return '<img src="/img/intereks/interior3/'.$interek->in3. '" height="100px" width="200px">';
            })
            ->addColumn('ek1', function($interek){
                return '<img src="/img/intereks/eksterior1/'.$interek->ek1. '" height="100px" width="200px">';
            })
            ->addColumn('ek2', function($interek){
                return '<img src="/img/intereks/eksterior2/'.$interek->ek2. '" height="100px" width="200px">';
            })
            ->addColumn('ek3', function($interek){
                return '<img src="/img/intereks/eksterior3/'.$interek->ek3. '" height="100px" width="200px">';
            })
            ->addColumn('action', function($interek){
                return view('datatable._action', [
                    'model'=> $interek,
                    'form_url'=> route('interekss.destroy', $interek->id),
                    'edit_url' => route('interekss.edit', $interek->id),
                    'confirm_message' => 'Yakin mau menghapus Data?'
                    ]);
            })->make(true);
        }
        $html = $htmlBuilder
        ->addColumn(['data' => 'modell_id', 'name'=>'modell_id', 'title'=>'Nama Model'])
        ->addColumn(['data' => 'in1', 'name'=>'in1', 'title'=>'Inter 1'])
        // ->addColumn(['data' => 'in2', 'name'=>'in2', 'title'=>'Inter 2'])
        // ->addColumn(['data' => 'in3', 'name'=>'in3', 'title'=>'Inter 3'])
           ->addColumn(['data' => 'ek1', 'name'=>'ek1', 'title'=>'Ekster 1'])
        // ->addColumn(['data' => 'ek2', 'name'=>'ek2', 'title'=>'Ekster 2'])
        // ->addColumn(['data' => 'ek3', 'name'=>'ek3', 'title'=>'Ekster 3'])
        ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 
            'searchable'=>false]);
        // return $html;
        // dd($html);
        return view('testingadmin.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('testingadmin.create');
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
            'modell_id' => 'required|exists:modells,id',
            'in1'=> 'image|max:2048|required',
            'in2'=> 'image|max:2048|required',
            'in3'=> 'image|max:2048|required',
            'ek1'=> 'image|max:2048|required',
            'ek2'=> 'image|max:2048|required',
            'ek3'=> 'image|max:2048|required'
            ]);
        $intereks = Intereks::create($request->except('in1','in2','in1','ek1','ek2','ek3'));
// isi field cover jika ada cover yang diupload
        if ($request->hasFile('in1','in2','in1','ek1','ek2','ek3')) {
// Mengambil file yang diupload
            $uploaded_cover = $request->file('in1');
            $uploaded_cover2 = $request->file('in2');
            $uploaded_cover5 = $request->file('in3');
            $uploaded_cover3 = $request->file('ek1');
            $uploaded_cover4 = $request->file('ek2');
            $uploaded_cover6 = $request->file('ek3');
// mengambil extension file
            $extension = $uploaded_cover->getClientOriginalExtension();
            $extension2 = $uploaded_cover2->getClientOriginalExtension();
            $extension5 = $uploaded_cover5->getClientOriginalExtension();
            $extension3 = $uploaded_cover3->getClientOriginalExtension();
            $extension4 = $uploaded_cover4->getClientOriginalExtension();
            $extension6 = $uploaded_cover6->getClientOriginalExtension();
// membuat nama file random berikut extension
            $filename = md5(time()) . '.' . $extension;
            $filename2 = md5(time()) . '.' . $extension2;
            $filename5 = md5(time()) . '.' . $extension5;
            $filename3 = md5(time()) . '.' . $extension3;
            $filename4 = md5(time()) . '.' . $extension4;
            $filename6 = md5(time()) . '.' . $extension6;
// menyimpan cover ke folder public/img
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/interior1';
            $destinationPath2 = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/interior2';
            $destinationPath5 = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/interior3';
            $destinationPath3 = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/eksterior1';
            $destinationPath4 = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/eksterior2';
            $destinationPath6 = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/eksterior3';
            $uploaded_cover->move($destinationPath, $filename);
            $uploaded_cover2->move($destinationPath2, $filename2);
            $uploaded_cover5->move($destinationPath5, $filename5);
            $uploaded_cover3->move($destinationPath3, $filename3);
            $uploaded_cover4->move($destinationPath4, $filename4);
            $uploaded_cover6->move($destinationPath6, $filename6);
// mengisi field cover di intereks dengan filename yang baru dibuat
            $intereks->in1 = $filename;
            $intereks->in2 = $filename2;
            $intereks->in3 = $filename5;
            $intereks->ek1 = $filename3;
            $intereks->ek2 = $filename4;
            $intereks->ek3 = $filename6;
            $intereks->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan"
            ]);
        return redirect()->route('interekss.index');
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
        $intereks=Intereks::find($id);
        return view('testingadmin.edit')->with(compact('intereks'));
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
            'modell_id' => 'required|exists:modells,id',
            'in1'=> 'image|max:2048',
            'in2'=> 'image|max:2048',
            'ek1'=> 'image|max:2048',
            'ek2'=> 'image|max:2048'
            ]);
        $intereks = Intereks::find($id);
        $intereks->update($request->all());
        if ($request->hasFile('in1','in2','ek1','ek2')) {
// menambil cover yang diupload berikut ekstensinya
            $filename1 = null;
            $filename2 = null;
            $filename3 = null;
            $filename4 = null;
            $uploaded_cover1 = $request->file('in1');
            $uploaded_cover2 = $request->file('in2');
            $uploaded_cover3 = $request->file('ek1');
            $uploaded_cover4 = $request->file('ek2');
            $extension1 = $uploaded_cover1->getClientOriginalExtension();
            $extension2 = $uploaded_cover2->getClientOriginalExtension();
            $extension3 = $uploaded_cover3->getClientOriginalExtension();
            $extension4 = $uploaded_cover4->getClientOriginalExtension();
// membuat nama file random dengan extension
            $filename1 = md5(time()) . '.' . $extension1;
            $filename2 = md5(time()) . '.' . $extension2;
            $filename3 = md5(time()) . '.' . $extension3;
            $filename4 = md5(time()) . '.' . $extension4;
            $destinationPath1 = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/interior1';
            $destinationPath2 = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/interior2';
            $destinationPath3 = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/eksterior1';
            $destinationPath4 = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/eksterior2';
// memindahkan file ke folder public/img
            $uploaded_cover1->move($destinationPath1, $filename1);
            $uploaded_cover2->move($destinationPath2, $filename2);
            $uploaded_cover3->move($destinationPath3, $filename3);
            $uploaded_cover4->move($destinationPath4, $filename4);
// hapus cover lama, jika ada
            if ($intereks->in1) {
                $old_cover = $intereks->in1;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/interior1'
                . DIRECTORY_SEPARATOR . $intereks->in1;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }
            if ($intereks->in2) {
                $old_cover = $intereks->in2;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/interior2'
                . DIRECTORY_SEPARATOR . $intereks->in2;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }
            if ($intereks->ek1) {
                $old_cover = $intereks->ek1;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/eksterior1'
                . DIRECTORY_SEPARATOR . $intereks->ek1;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }
            if ($intereks->ek2) {
                $old_cover = $intereks->ek2;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/eksterior2'
                . DIRECTORY_SEPARATOR . $intereks->ek2;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
                }
            }

// ganti field cover dengan cover yang baru
            $intereks->in1 = $filename1;
            $intereks->in2 = $filename2;
            $intereks->ek1 = $filename3;
            $intereks->ek2 = $filename4;
            $intereks->save();
        }
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan"
            ]);
        return redirect()->route('interekss.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intereks1 = Intereks::find($id);
// hapus cover lama, jika ada
        if ($intereks1->in1) {
            $old_cover = $intereks1->in1;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/interior1'
            . DIRECTORY_SEPARATOR . $intereks1->in1;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $intereks2 = Intereks::find($id);
// hapus cover lama, jika ada
        if ($intereks2->in2) {
            $old_cover = $intereks2->in2;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/interior2'
            . DIRECTORY_SEPARATOR . $intereks2->in2;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $intereks3 = Intereks::find($id);
// hapus cover lama, jika ada
        if ($intereks3->ek1) {
            $old_cover = $intereks3->ek1;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/eksterior1'
            . DIRECTORY_SEPARATOR . $intereks3->ek1;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $intereks4 = Intereks::find($id);
// hapus cover lama, jika ada
        if ($intereks4->ek2) {
            $old_cover = $intereks4->ek2;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img/intereks/eksterior2'
            . DIRECTORY_SEPARATOR . $intereks4->ek2;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
// File sudah dihapus/tidak ada
            }
        }
        $intereks4->delete();
        $intereks3->delete();
        $intereks2->delete();
        $intereks1->delete();

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"intereks berhasil dihapus"
            ]);
        return redirect()->route('interekss.index');
}
}
