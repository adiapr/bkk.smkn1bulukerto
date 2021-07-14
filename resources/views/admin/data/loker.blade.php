@extends('admin.pages.master')

@section('page-title')
    Data Lowongan
@endsection

@section('arrow1')
    Lowongan kerja
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="float: left">Data Lowongan</h4>
                
                {{-- show modal --}}
                <button class="btn btn-primary btn-sm" style="float: right" data-toggle="modal" data-target="#myModal11">Tambah Loker</button>
                {{-- content modal --}}
                <div id="myModal11" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <form action="{{ route('admin.loker.add') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Loker</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Nama">Nama Perusahaan</label>
                                                <input type="text" class="form-control form-control-sm" name="perusahaan" placeholder="Masukkan nama perusahaan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="posisi">Posisi</label>
                                                <input type="text" class="form-control form-control-sm" name="posisi" placeholder="Masukkan posisi" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal Tes</label>
                                                <input type="date" class="form-control form-control-sm" name="tanggal" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="jurusan">Rekomendasi Jurusan</label>
                                                <input type="text" class="form-control form-control-sm" name="jurusan" placeholder="TKR, RPL, AK dll" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lokasi">Lokasi Tes</label>
                                                <input type="text" class="form-control form-control-sm" name="lokasi" placeholder="Masukkan lokasi" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="logo">Logo ( 400x125 )</label>
                                                <input type="file" class="form-control form-control-sm" name="logo" placeholder="Masukkan lokasi" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="logo">Deskripsi</label>
                                                <textarea class="form-control" name="deskripsi" placeholder="Bisa menggunakan kode html disini" required rows="10"></textarea>
                                            </div>
                                        </div>
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
                            @foreach ($loker as $isi)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>
                                    <?php
                                        $koneksi = mysqli_connect("127.0.0.1","root","","bkk.smkn1bulukerto");
                                        $id =  $isi->id;
                                        $query = mysqli_query($koneksi, "select * from loker where id='$id'");
                                        $data = mysqli_fetch_array($query);
                                    ?>
                                    <a href="" data-toggle="modal" data-target="#myModall{{ $isi->id }}">
                                    {{ $isi->perusahaan }}
                                    </a>
                                    <div id="myModall{{ $isi->id }}" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h1><?php echo $data['perusahaan'] ?></h1>
                                                    <h4 style="color: #cccccc">{{ $isi->posisi }}</h4>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <i class="fa fa-calendar"></i> &nbsp; {{ $isi->tes }}<br>
                                                            <i class="fa fa-university"></i> &nbsp; {{ $isi->lokasi }}<br>
                                                            <i class="fa fa-graduation-cap"></i> &nbsp; {{ $isi->jurusan }}<br>
                                                        </div>
                                                        <div class="col-6" style="text-align: right">
                                                            <img src="{{asset('images/company-logo/'.$isi->logo) }}" height="80">
                                                        </div>
                                                    </div>
                                                    <b>Deskripsi</b><br>
                                                    {!! $isi->keterangan !!}
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-default btn-sm" data-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $isi->posisi }}</td>
                                <td>{{ $isi->tes }}</td>
                                <td>{{ $isi->jurusan }}</td>
                                <td>{{ $isi->lokasi }}</td>
                                <td><img src="{{asset('images/company-logo/'.$isi->logo) }}" height="80"></td>
                                <td> <div style="width: 80px;"></div>
                                    {{-- membuat edit --}}
                                    <button class="btn btn-sm btn-primary" style="float: left;margin-right:3px" data-toggle="modal" data-target="#myModalll{{ $isi->id }}"><i class="fa fa-pencil"></i></button>
                                    <div id="myModalll{{ $isi->id }}" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <form action="{{ route('admin.loker.update', $isi->id) }}" enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Tambah Loker</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="Nama">Nama Perusahaan</label>
                                                                    <input type="text" value="{{ $isi->perusahaan }}" class="form-control form-control-sm" name="perusahaan" placeholder="Masukkan nama perusahaan" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="posisi">Posisi</label>
                                                                    <input type="text" value="{{ $isi->posisi }}" class="form-control form-control-sm" name="posisi" placeholder="Masukkan posisi" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="tanggal">Tanggal Tes</label>
                                                                    <input type="date" value="{{ $isi->tes }}" class="form-control form-control-sm" name="tanggal" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="jurusan">Rekomendasi Jurusan</label>
                                                                    <input type="text" value="{{ $isi->jurusan }}" class="form-control form-control-sm" name="jurusan" placeholder="TKR, RPL, AK dll" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="lokasi">Lokasi Tes</label>
                                                                    <input type="text" value="{{ $isi->lokasi }}" class="form-control form-control-sm" name="lokasi" placeholder="Masukkan lokasi" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="logo">Logo perusahaan</label>
                                                                    <input type="file" class="form-control form-control-sm" name="logo" placeholder="Masukkan lokasi">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="logo">Deskripsi</label>
                                                                    <textarea  class="form-control" name="deskripsi" placeholder="Bisa menggunakan kode html disini" required rows="10">{{ $isi->keterangan }}</textarea>
                                                                </div>
                                                            </div>
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
                                    {{-- ---------------------------------------------------- --}}
                                    {{-- HAPUS LOKER --}}
                                    <form action="{{ route('admin.loker.delete', $isi->id) }}" method="post">
                                    @csrf
                                    <button style="float: left" onClick="return confirm('Hapus Loker ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
