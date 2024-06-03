@extends('layouts.master')
@section('title', 'Pasien')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pasien</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Pasien</a></li>
                        <li class="breadcrumb-item active">Pasien</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pasien :</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama">Nama pasein</label>
                                    <input type="text" class="form-control" name="namapasien" id="namapasien" placeholder="Masukkan Nama Pasien" value="{{ $Pasien->nama_pasien }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="kode">Kode pasien</label>
                                    <input type="text" class="form-control" name="kodepasien" id="kodepasien" placeholder="Masukan kode Pasien" value="{{ $Pasien->kode_pasien }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Nama Dokter</label>
                                    <input type="text" class="form-control" name="namadokter" id="namadokter" placeholder="Masukan nama dokter" value="{{ $Pasien->nama_dokter }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Lahir">Lahir</label>
                                    <input type="text" class="form-control" name="lahir" id="lahir" placeholder="Masukan tanggal lahir" value="{{ $Pasien->lahir }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Agama">Agama</label>
                                    <input type="text" class="form-control" name="agama" id="agama" placeholder="Masukan agama" value="{{ $Pasien->agama}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <input type="text" class="form-control" name="status" id="status" placeholder="Masukan status" value="{{ $Pasien->status }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="Jk">Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="jeniskelamin" id="jeniskelamin" placeholder="Masukan Jenis Kelamin" value="{{ $Pasien->jenis_kelamin }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Masukan telepon" value="{{ $Pasien->telepon }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan alamat" value="{{ $Pasien->alamat }}" disabled>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="button" class="btn btn-danger" value="Kembali" onclick="history.back()">
                            </div>
                            <!-- /.content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
