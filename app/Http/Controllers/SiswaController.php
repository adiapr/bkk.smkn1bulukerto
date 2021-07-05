<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// panggil model siswa
use App\Siswa;

class SiswaController extends Controller
{
    // agar bisa dibuka oleh admin, tidak bisa dibuka siswa
    public function __construct(){
        $this->middleware('admin');
    }

    // show siswa tkr
    public function siswa(){
        $no = 0;
        $siswa = Siswa::all();
        return view('admin.data.siswa-tkr', compact('no','siswa'));
    }

    public function add_siswa_tkr(Request $request){
        //membuat validasi
        $this->validate($request,[
            'nama'      => 'required|string',
            'nisn'      => 'required|unique:siswa',
            'tgl_lahir' => 'required|date',
            'kelas'     => 'required|numeric',
            'lulus'     => 'required|numeric'
        ]);
        // panggil tabel siswa
        $siswa = new Siswa;
        $siswa->nama        = $request->nama;
        $siswa->nisn        = $request->nisn;
        $siswa->kelas       = 'TKR-'.$request->kelas;
        $siswa->tgl_lahir   = $request->tanggal;
        $siswa->lulusan     = $request->lulus;
        $siswa->telp        = $request->hp;

        $siswa->save();
        return redirect('/admin/siswa-TKR')->with('berhasil','Data siswa berhasil ditambahkan');
    }
}
