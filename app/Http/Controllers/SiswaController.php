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

    // delete (for all siswa)
    public function deleteSiswa($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/admin/siswa-TKR')->with('hapus','Data berhasil dihapus');
    }

    // edit (for all siswa)
    public function updateSiswa(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->nama        = $request->nama;
        $siswa->nisn        = $request->nisn;
        $siswa->kelas       = $request->kelas;
        $siswa->tgl_lahir   = $request->tanggal;
        $siswa->lulusan     = $request->lulus;
        $siswa->telp        = $request->hp;

        $siswa->update();
        return redirect('/admin/siswa-TKR')->with('update','Data berhasil diperbaharui');
    }

    // show siswa tkr
    public function siswa_tkr(){
        $no = 0;
        $siswa = Siswa::all()->sortByDesc('id');
        return view('admin.data.siswa-tkr', compact('no','siswa'));
    }

    public function add_siswa_tkr(Request $request){
        //membuat validasi
        $this->validate($request,[
            'nama'      => 'required|string',
            'nisn'      => 'required|unique:siswa',
            'kelas'     => 'required|numeric',
            'lulus'     => 'required|numeric|max:9999|min:2010'
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
