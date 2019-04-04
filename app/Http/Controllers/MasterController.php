<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informasi;
use App\kategori;
use App\unit;
use App\curr;
use Illuminate\Support\Facades\Input;

class MasterController extends Controller
{  
    public function index()
    {
    	return view('master.index');
    }

    public function delete_kategori($id)
    {
      $a = kategori::find($id);
      $a->delete();
      return redirect(url('data_barang'));
    }

    public function delete_curr($id)
    {
      $a = curr::find($id);
      $a->delete();
      return redirect(url('data_barang'));
    }

    public function delete_unit($id)
    {
      $a = unit::find($id);
      $a->delete();
      return redirect(url('data_barang'));
    }

    public function data_informasi()
    {
      $a = informasi::first();
      return view('master.datainfo')->with('a',$a);
    }

    public function data_barang()
    {
      $a = kategori::all();
      $s = unit::all();
      $d = curr::all();
      return view('setting.databarang')->with('d',$d)->with('s',$s)->with('a',$a);
    }

    public function update_informasi(Request $r)
    {
      $a = informasi::find($r->input('id'));
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

    public function informasi()
    {
      $a = informasi::all();
    	return view('master.informasi')->with('a',$a);
    }

    public function user()
    {
    	return view('master.user');
    }

    public function list_barang()
    {
      return view('barang.list');
    }

    public function tambah_barang()
    {
      $a = kategori::all();
      $s = unit::all();
      $d = curr::all();
      return view('barang.add')->with('curr',$d)->with('unit',$s)->with('kategori',$a);
    }

    public function list_user()
    {
      return view('user.list');
    }

    public function tambah_user()
    {
      return view('user.add');
    }
}
