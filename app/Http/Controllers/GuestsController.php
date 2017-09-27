<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Modell;
use App\Galeri;
use App\Mobil;
use App\Leader;
use App\Poto;
use App\Perusahaan;
use App\Mesin;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Str;


class GuestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
         //$mobil = mobil::with('modell')->get();

       $mobil = Mobil::orderBy('created_at','desc')->take(3)->get();
       $potoa = Poto::orderBy('created_at','desc')->take(1)->get();
       $poto = Poto::orderBy('created_at','desc')->take(3)->get();
       $mobils = Mobil::orderBy('created_at','desc')->paginate(5);
       $leader = Leader::orderBy('created_at','asc')->paginate(5);
       $leadera = Leader::orderBy('created_at','asc')->paginate(1);
       $modell = Modell::all();
       $mobile = Mobil::all();
       $perusahaan = Perusahaan::all();
       
       return view('guest.index')->with(compact('mobils','modell','mobil','leader','poto','potoa','mobile','perusahaan','leadera'));
   }

   public function about(Request $request, Builder $htmlBuilder)
   {
      $mobil = Mobil::orderBy('created_at','desc')->take(3)->get();
       $potoa = Poto::orderBy('created_at','desc')->take(1)->get();
       $poto = Poto::orderBy('created_at','desc')->take(3)->get();
       $mobils = Mobil::orderBy('created_at','desc')->paginate(5);
       $leader = Leader::orderBy('created_at','asc')->paginate(5);
       $leadera = Leader::orderBy('created_at','asc')->paginate(1);
       $modell = Modell::all();
       $mobile = Mobil::all();
       $mobile1 = Mobil::orderBy('created_at','desc')->take(1)->get();
       $perusahaan = Perusahaan::all();
       return view('guest.about')->with(compact('mobils','modell','mobil','leader','poto','potoa','mobile','perusahaan','leadera','mobile1')); 
   }

   public function services(Request $request, Builder $htmlBuilder)
   {
      $mobil = Mobil::orderBy('created_at','desc')->take(3)->get();
       $potoa = Poto::orderBy('created_at','desc')->take(1)->get();
       $poto = Poto::orderBy('created_at','desc')->take(3)->get();
       $mobils = Mobil::orderBy('created_at','desc')->paginate(5);
       $leader = Leader::orderBy('created_at','asc')->paginate(5);
       $leadera = Leader::orderBy('created_at','asc')->paginate(1);
       $modell = Modell::all();
       $mobile = Mobil::all();
       $mobile1 = Mobil::orderBy('created_at','desc')->take(1)->get();
       $perusahaan = Perusahaan::all();
       return view('guest.ourservice')->with(compact('mobils','modell','mobil','leader','poto','potoa','mobile','perusahaan','leadera','mobile1')); 
   }

   public function testing(Request $request, Builder $htmlBuilder)
   {
         //$mobil = mobil::with('modell')->get();

       $mobil = Mobil::orderBy('created_at','desc')->take(3)->get();
       $potoa = Poto::orderBy('created_at','desc')->take(1)->get();
       $poto = Poto::orderBy('created_at','desc')->take(3)->get();
       $mobils = Mobil::orderBy('created_at','desc')->paginate(5);
       $leader = Leader::orderBy('created_at','asc')->paginate(5);
       $leadera = Leader::orderBy('created_at','asc')->paginate(1);
       $modell = Modell::all();
       $mobile = Mobil::all();
       $mobile1 = Mobil::orderBy('created_at','desc')->take(1)->get();
       $perusahaan = Perusahaan::all();
       return view('guest.testing')->with(compact('mobils','modell','mobil','leader','poto','potoa','mobile','perusahaan','leadera','mobile1'));
   }

   public function showperkategori($id)
    {
         $filtercategori = Mobil::where('modell_id','=',$id)->get();
         $filtercategori2 = Modell::where('id','=',$id)->get();
         $mesin = Mesin::where('modell_id','=',$id)->get();
         $mobil = Mobil::orderBy('created_at','desc')->take(3)->get();
         $mobils = Mobil::orderBy('created_at','desc')->paginate(5);
         $modell = Modell::all();
         $perusahaan = Perusahaan::all();
        
        return view('guest.model',compact('mobil','mobils','modell','filtercategori','perusahaan','filtercategori2','mesin'));
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
       $mobil = Mobil::orderBy('created_at','desc')->take(3)->get();
       $mobile = Mobil::where('id', $id)->first();
       // $dek=$mobile->deskrispsi;
       $modell = Modell::all();
       $poto = Poto::orderBy('created_at','asc')->take(2)->get();
       $potoa = Poto::orderBy('created_at','desc')->take(1)->get();
       
       $kalimat = $mobile->deskripsi;
       $sub_kalimat = substr($kalimat,0,250)."...";

       return view('guest.news',compact ('mobil','mobile',$mobile,'dek','modell','poto','potoa','sub_kalimat'));


   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
