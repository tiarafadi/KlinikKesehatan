@extends('layouts.master')
@section('title', 'Dokter')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dokter</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dokter</a></li>
                        <li class="breadcrumb-item active">Dokter</li>
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
                            <h3 class="card-title">Dokter :</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Nama">Nama dokter</label>
                                    <input type="text" class="form-control" name="namadokter" id="namadokter" placeholder="Masukkan Nama dokter" value="{{ $Dokter->nama_dokter }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="kode">Kode dokter</label>
                                    <input type="text" class="form-control" name="kodedokter" id="kodedokter" placeholder="Masukan kode Dokter" value="{{ $Dokter->kode_Dokter }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jadwal_praktek">Jadwal praktek</label>
                                    <input type="text" class="form-control" name="jadwalpraktek" id="jadwalpraktek" placeholder="Masukan Jadwal Praktek" value="{{ $Dokter->jadwal_praktek }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="number" class="form-control" name="telepon" id="telepon" placeholder="Masukan Nomor Telpon" value="{{ $Dokter->telepon}}" disabled>
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
