@extends('admin.pages.master')

@section('page-title')
    Siswa TKR
@endsection

@section('arrow1')
    Data Siswa
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="float: left">Tambah Siswa</h4>
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
                <form action="" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Nama">Nama Siswa</label>
                                <input type="text" class="form-control form-control-sm" name="nama" placeholder="Masukkan nama siswa" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="NISN">NISN</label>
                                <input type="number" class="form-control form-control-sm" name="nisn" placeholder="Masukkan dengan benar" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="NISN">Kelas</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text input-group-text-sm" id="basic-addon3">TKR -</span>
                                    </div>
                                    <input type="number" class="form-control form-control-sm" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tgl">Tanggal Lahir</label>
                                <input type="date" class="form-control form-control-sm" name="nisn" placeholder="Masukkan dengan benar" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" style="float: right" class="btn btn-primary btn-sm" value="Simpan Data">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
                    <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama (Alt)</th>
                                <th>Judul</th>
                                <th>Tagline</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($slider as $isi) --}}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><img src="" height="50"></td>
                                <td>
                                    {{-- <form action="{{ route('slider.delete') }}" method="post">
                                    @csrf
                                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                        <button onclick="return confirm('Hapus data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form> --}}
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
