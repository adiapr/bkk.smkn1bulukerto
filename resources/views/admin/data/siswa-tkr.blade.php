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
                    @endif

                    {{-- menampilkan error --}}
                    @if (count($errors) > 0)
                        <ul class="alert alert-danger" style="list-style: none">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <form action="{{ route('admin.siswa-tkr.add') }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Nama">Nama Siswa</label>
                                <input type="text" class="form-control form-control-sm" name="nama" placeholder="Masukkan nama siswa" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="NISN">NISN</label>
                                <input type="number" class="form-control form-control-sm" name="nisn" placeholder="Masukkan dengan benar" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text input-group-text-sm" id="basic-addon3">TKR -</span>
                                    </div>
                                    <input type="number" name="kelas" class="form-control form-control-sm" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tgl">Tanggal Lahir</label>
                                <input type="date" class="form-control form-control-sm" name="tanggal" placeholder="Masukkan dengan benar" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lulus">Tahun Lulus</label>
                                <input type="number" class="form-control form-control-sm" name="lulus" placeholder="Masukkan tahun lulus" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hp">No HP</label>
                                <input type="number" class="form-control form-control-sm" name="hp" placeholder="Tidak wajib">
                            </div>
                        </div>
                        <div class="col-md-12"><br>
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
                <h4 class="card-title" style="float: left">List siswa TKR</h4>
            </div>
            <div class="card-body">
                <div>
                    {{-- menampilkam alert --}}
                    @if(Session::has('hapus'))
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
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>NISN</th>
                                <th>Tanggal Lahir</th>
                                <th>No. HP</th>
                                <th>Tahun Lulus</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $isi)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $isi->nama }}</td>
                                <td>{{ $isi->kelas }}</td>
                                <td>{{ $isi->nisn }}</td>
                                <td>{{ $isi->tgl_lahir->format('d/m/Y') }}</td>
                                <td>{{ $isi->telp }}</td>
                                <td>{{ $isi->lulusan }}</td>
                                <td>
                                    {{-- <form action="{{ route('slider.delete') }}" method="post">
                                    @csrf
                                        <a href="" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                        <button onclick="return confirm('Hapus data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form> --}}
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
