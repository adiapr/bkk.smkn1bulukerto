<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Slider;
use File;

class halamanController extends Controller
{
    public function index(){
        return view('admin.tables');
    }

    public function indexSlider(){
        $no = 0;
        $slider = Slider::all();
        return view('admin.setting.slider', compact('no','slider'));
    }

    public function addSlider(Request $request){
        $this->validate($request,[
            'nama'      => 'required',
            'judul'     => 'required',
            'tagline'   => 'required',
            'gambar'    => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $slider = new Slider;
        $slider->nama           = $request->nama;
        // $slider->slider_seo     = $request->Str::slug($request->nama);
        $slider->judul          = $request->judul;
        $slider->tagline        = $request->tagline;
        // add image
        $gambar   = $request->gambar;
        $namafile = time().'.'.$gambar->getClientOriginalExtension();
        $gambar->move('images/slider', $namafile);
        $slider->gambar         = $namafile;
        // simpan data
        $slider->save();
        // redirect
        return redirect('/admin/slider')->with('berhasil','Gambar slider berhasil ditambahkan');
    }
}
