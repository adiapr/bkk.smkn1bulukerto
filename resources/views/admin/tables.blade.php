@extends('admin.pages.master')

@section('page-title')
    Data Siswa
@endsection

@section('arrow1')
    Home
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" style="float: left">List Siswa</h4>
                {{-- show modal --}}
                <button class="btn btn-primary btn-sm" style="float: right" data-toggle="modal" data-target="#myModal">Tambah Siswa</button>
                {{-- content modal --}}
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Siswa</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="Nama">Nama</label>
                                    <input type="text" class="form-control form-control-sm" placeholder="Masukkan nama siwa" required>
                                </div>
                                <div class="form-group">
                                    <label for="Nama">NISN</label>
                                    <input type="number" class="form-control form-control-sm" placeholder="Masukkan NISN" required>
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-sm" placeholder="Masukkan nama siwa" required>
                                </div>
                                <div class="form-check">
                                    <label>Gender</label><br/>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
                                        <span class="form-radio-sign">Male</span>
                                    </label>
                                    <label class="form-radio-label ml-3">
                                        <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                        <span class="form-radio-sign">Female</span>
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default btn-sm" data-dismiss="modal">Tutup Modal</button>
                                <button class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @yield('card-body')
            </div>
        </div>
    </div>
</div>
@endsection
