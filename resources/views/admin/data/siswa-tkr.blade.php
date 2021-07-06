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
                        <ul class="alert alert-danger" style="list-style: none;color:red">
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
                                <input type="text" value="{{ old('nama') }}" class="form-control form-control-sm" name="nama" placeholder="Masukkan nama siswa" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="NISN">NISN</label>
                                <input type="number" value="{{ old('nisn') }}" class="form-control form-control-sm" name="nisn" placeholder="Masukkan dengan benar" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text input-group-text-sm" id="basic-addon3">TKR -</span>
                                    </div>
                                    <input type="number" value="{{ old('kelas') }}" name="kelas" class="form-control form-control-sm" id="basic-url" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tgl">Tanggal Lahir</label>
                                <input type="date" class="date form-control form-control-sm" value="{{ old('tanggal') }}"  id="tanggal" name="tanggal" placeholder="yyyy/mm/dd" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="lulus">Tahun Lulus</label>
                                <input type="number" class="form-control form-control-sm" name="lulus" value="{{ old('lulus') }}" placeholder="Masukkan tahun lulus" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="hp">No HP</label>
                                <input type="number" class="form-control form-control-sm" name="hp" value="{{ old('hp') }}" placeholder="Tidak wajib">
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
                    @elseif(Session::has('update'))
                    <div class="alert alert-success" style="color: green">
                        {{ Session::get('update')}}
                    </div>
                    @endif
                </div>
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-bordered table-hover" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>NISN</th>
                                <th>Tanggal Lahir</th>
                                <th>No. HP</th>
                                <th>Tahun Lulus</th>
                                <th style="width:200px">Aksi</th>
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
                                <td><div style="width: 90px"></div>
                                    <button style="float: left" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#myModal{{ $isi->id }}"><i class="fa fa-edit"></i></button>
                                    <form action="{{ route('siswa.delete', $isi->id) }}" method="post">
                                        @csrf
                                        <button style="float: left" onclick="return confirm('Hapus data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <?php
                                        $koneksi = mysqli_connect("127.0.0.1","root","","bkk.smkn1bulukerto");
                                        $id =  $isi->id;
                                        $query = mysqli_query($koneksi, "select * from siswa where id='$id'");
                                        $data = mysqli_fetch_array($query);
                                    ?>
                                    <div id="myModal{{ $isi->id }}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <form action="{{ route('admin.siswa.update', $isi->id) }}"  method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="Nama">Nama</label>
                                                            <input type="text" value="<?php echo $data['nama'] ?>"  class="form-control form-control-sm" name="nama" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Nama">NISN</label>
                                                            <input type="text" class="form-control form-control-sm" value="<?php echo $data['nisn'] ?>" name="nisn" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Nama">Kelas</label>
                                                            <input type="text" class="form-control form-control-sm" name="kelas" value="<?php echo $data['kelas'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Nama">Tanggal Lahir</label>
                                                            <input type="date" class="form-control form-control-sm" name="tanggal" value="<?php echo $data['tgl_lahir'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Nama">Tahun Lulus</label>
                                                            <input type="number" class="form-control form-control-sm" name="lulus" value="<?php echo $data['lulusan'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Nama">No. HP</label>
                                                            <input type="text" class="form-control form-control-sm" name="hp"value="<?php echo $data['telp'] ?>" required>
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
