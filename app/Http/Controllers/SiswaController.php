<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// panggil model
use App\Siswa;
use App\Loker;
use File;

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

    public function siswa_ak(){
        $no = 0;
        $siswa = Siswa::where('kelas','like','AK%')->orderBy('id','desc')->get();
        return view('admin.data.siswa-akuntansi', compact('no','siswa'));
    }

    public function add_siswa_ak(Request $request){
        $this->validate($request,[
            'nama'      => 'required|string',
            'nisn'      => 'required|unique:siswa',
            'kelas'     => 'required|numeric|min:1|max:4',
            'lulus'     => 'required|numeric|max:9999|min:2010'
        ]);
        $siswa = new Siswa;
        $siswa->nama        = $request->nama;
        $siswa->nisn        = $request->nisn;
        $siswa->kelas       = 'AK-'.$request->kelas;
        $siswa->tgl_lahir   = $request->tanggal;
        $siswa->lulusan     = $request->lulus;
        $siswa->telp        = $request->hp;
        $siswa->level       = 1;
        $siswa->save();
        return redirect('admin/siswa-AK')->with('berhasil','Data siswa berhasil ditambahkan');
    }

    public function deleteSiswaAK($id){
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('admin/siswa-AK')->with('hapus','Data berhasil dihapus');
    }

    public function updateSiswaAK(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->nama        = $request->nama;
        $siswa->nisn        = $request->nisn;
        $siswa->kelas       = $request->kelas;
        $siswa->tgl_lahir   = $request->tanggal;
        $siswa->lulusan     = $request->lulus;
        $siswa->telp        = $request->hp;
        $siswa->update();
        return redirect('admin/siswa-AK')->with('update', 'Data berhasil diperbaharui');
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

    public function updateSiswaRPL(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->nama        = $request->nama;
        $siswa->nisn        = $request->nisn;
        $siswa->kelas       = $request->kelas;
        $siswa->tgl_lahir   = $request->tanggal;
        $siswa->lulusan     = $request->lulus;
        $siswa->telp        = $request->hp;
        $siswa->update();
        return redirect('admin/siswa-RPL')->with('update', 'Data berhasil diperbaharui');
    }

    // LOKER
    public function listLoker(){
        $no = 0;
        $loker = Loker::orderBy('id','desc')->get();
        return view('admin.data.loker',compact('no','loker'));
    }

    public function addLoker(Request $request){
        $loker = new Loker;
        $loker->perusahaan      = $request->perusahaan;
        $loker->posisi          = $request->posisi;
        $loker->tes             = $request->tanggal;
        $loker->jurusan         = $request->jurusan;
        $loker->lokasi          = $request->lokasi;
        $loker->keterangan      = $request->deskripsi;
        // inisialisasi save gambar
        $gambar     = $request->logo;
        $namafile   = time().'.'.$gambar->getClientOriginalExtension();
        $gambar->move('images/company-logo', $namafile);
        // inisialisasi menyimpan
        $loker->logo            = $namafile;
        // simpan
        $loker->save();
        return redirect('admin/loker    ')->with('berhasil','Lowongan berhasil dibagikan');
    }

    public function deleteLoker($id){
        $loker = Loker::find($id);
        $namafile = $loker->logo;
        File::delete('images/company-logo/'.$namafile);
        $loker->delete();

        return redirect('admin/loker')
        ->with('hapus','Data loker berhasil dihapus');
    }

    public function updateLoker(Request $request, $id){
        $loker = Loker::find($id);
        // jika gambar diubah
        if ($request->has('logo')){
            $loker->perusahaan      = $request->perusahaan;
            $loker->posisi          = $request->posisi;
            $loker->tes             = $request->tanggal;
            $loker->lokasi          = $request->lokasi;
            $loker->jurusan         = $request->jurusan;
            $loker->keterangan      = $request->deskripsi;
            // olah gambar
            $logo   = $request->logo;
            $namafile = time().'.'.$logo->getClientOriginalExtension();
            $logo->move('images/company-logo/', $namafile);
            // balik
            $loker->logo            = $namafile;
        }else{
            // jika gambar tidak diubah
            $loker->perusahaan      = $request->perusahaan;
            $loker->posisi          = $request->posisi;
            $loker->tes             = $request->tanggal;
            $loker->lokasi          = $request->lokasi;
            $loker->jurusan         = $request->jurusan;
            $loker->keterangan      = $request->deskripsi;
        }
        $loker->update();

        return redirect('/admin/loker')
        ->with('berhasil','Data loker telah diperbaharui');
    }
}
