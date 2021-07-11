@extends('admin.pages.master')

@section('page-title')
    Halaman Slider
@endsection

@section('arrow1')
    Setting
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="float: left">Slider</h4>
                {{-- show modal --}}
                <button class="btn btn-primary btn-sm" style="float: right" data-toggle="modal" data-target="#myModal">Tambah Gambar</button>
                {{-- content modal --}}
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <form action="{{ route('admin.slider.add') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Slider</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Nama">Nama</label>
                                        <input type="text" class="form-control form-control-sm" name="nama" placeholder="Muncul sebagai alt image" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Nama">Judul</label>
                                        <input type="text" class="form-control form-control-sm" name="judul" placeholder="Masukkan judul (Baris 1)" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Nama">Tagline</label>
                                        <input type="text" class="form-control form-control-sm" name="tagline" placeholder="Masukkan tagline (baris 2)" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Nama">Gambar Slide</label>
                                        <input type="file" class="form-control form-control-sm" name="gambar" placeholder="Masukkan tagline (baris 2)" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
                                    <button class="btn btn-primary btn-sm">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    {{-- menampilkam alert --}}
                    @if (Session::has('berhasil'))
                        <div class="alert alert-success" style="color:green">
                            {{ Session::get('berhasil') }}
                        </div>
                    @elseif(Session::has('hapus'))
                        <div class="alert alert-danger" style="color: red">
                            {{ Session::get('hapus')}}
                        </div>
                    @endif
                </div>
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Perusahaan</th>
                                <th>Posisi</th>
                                <th>Tanggal Tes</th>
                                <th>Rekomendasi Jurusan</th>
                                <th>Lokasi Tes</th>
                                <th>Logo</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slider as $isi)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $isi->nama }}</td>
                                <td>{{ $isi->judul }}</td>
                                <td>{{ $isi->tagline }}</td>
                                <td><img src="{{ asset('images/slider/'.$isi->gambar) }}" height="50"></td>
                                <td>
                                    <form action="{{ route('slider.delete', $isi->id) }}" method="post">
                                    @csrf
                                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                        <button onclick="return confirm('Hapus data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
