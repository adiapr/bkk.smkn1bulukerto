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
        $siswa = Siswa::where('kelas','like','TKR%')->orderBy('id','desc')->get();
        return view('admin.data.siswa-tkr', compact('no','siswa'));
    }

    public function add_siswa_tkr(Request $request){
        //membuat validasi
        $this->validate($request,[
            'nama'      => 'required|string',
            'nisn'      => 'required|unique:siswa',
            'kelas'     => 'required|numeric|min:1|max:4',
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
        $siswa->level       = 1;

        $siswa->save();
        return redirect('/admin/siswa-TKR')->with('berhasil','Data siswa berhasil ditambahkan');
    }

    public function siswa_rpl(){
        $no = 0;
        $siswa = Siswa::where('kelas','like','RPL%')->orderBy('id','desc')->get();
        return view('admin.data.siswa-rpl', compact('no','siswa'));
    }

    public function add_siswa_rpl(Request $request){
        $this->validate($request,[
            'nama'      => 'required|string',
            'nisn'      => 'required|unique:siswa',
            'kelas'     => 'required|numeric|min:1|max:4',
            'lulus'     => 'required|numeric|max:9999|min:2010'
        ]);
        $siswa = new Siswa;
        $siswa->nama        = $request->nama;
        $siswa->nisn        = $request->nisn;
        $siswa->kelas       = 'RPL-'.$request->kelas;
        $siswa->tgl_lahir   = $request->tanggal;
        $siswa->lulusan     = $request->lulus;
        $siswa->telp        = $request->hp;
        $siswa->level       = 1;
        $siswa->save();
        return redirect('admin/siswa-RPL')->with('berhasil','Data siswa berhasil ditambahkan');
    }

    public function deleteSiswaRPL($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('admin/siswa-RPL')->with('hapus','Data berhasil dihapus');
    }
}
