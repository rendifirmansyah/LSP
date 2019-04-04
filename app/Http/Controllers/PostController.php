<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\informasi;
use App\kategori;
use App\unit;
use App\curr;

class PostController extends Controller
{
    public function post_informasi(Request $r)
    {
    	$a = new informasi;
    	$a->nama = $r->input('nama');
    	$a->telepon = $r->input('telepon');
    	$a->kodepos = $r->input('kodepos');
    	$a->deskripsi = $r->input('deskripsi');
    	$a->alamat = $r->input('alamat');
    	if(Input::hasFile('gambar')){
    	dd($gambar);
        $gambar = date("YmdHis")
        .uniqid()
        ."."
        .Input::file('gambar')->getClientOriginalExtension();
        Input::file('gambar')->move(storage_path('gambar'),$gambar);
        $a->gambar = $gambar;
      }


      $a->save();
      return redirect(url('/informasi'));
    }

    public function post_kategori(Request $r)
    {
        $a = new kategori;
        $a->kategori = $r->input('kategori');
        $a->save();
      return redirect(url('/data_barang'));
    }

    public function post_unit(Request $r)
    {
       $a = new unit;
        $a->unit = $r->input('unit');
        $a->save();
      return redirect(url('/data_barang')); 
    }

    public function post_curr(Request $r)
    {
       $a = new curr;
        $a->curr = $r->input('curr');
        $a->save();
      return redirect(url('/data_barang')); 
    }
}
