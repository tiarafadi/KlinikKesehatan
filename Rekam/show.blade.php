@extends('layouts.master')
@section('title', 'Rekam')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rekam</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Rekam</a></li>
                        <li class="breadcrumb-item active">Rekam</li>
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
                            <h3 class="card-title">Rekam : {{ $Rekam[0]->nama }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Rekam">Rekam</label>
                                    <input type="text" class="form-control" name="Rekam" id="Rekam" placeholder="Masukkan Rekam" value="{{ $Rekam[0]->Nama }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="kode">kode_dokter</label>
                                    <input type="text" class="form-control" name="kode" id="kode" placeholder="Masukan kode dokter" value="{{ $Rekam[0]->kode_Dokter }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="jadwal_praktek">jadwal_praktek</label>
                                    <input type="text" class="form-control" name="jadwal" id="jadwal" placeholder="Masukan jadwal praktek" value="{{ $Rekam[0]->jadwal_praktek }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="telpon">Telepon</label>
                                    <input type="number" class="form-control" name="telpon" id="telpon" placeholder="Masukan nomor_telpon" value="{{ $Rekam[0]->telpon}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="rekam">jenis_layanan</label>
                                    <input type="text" class="form-control" name="jenis_layanan" id="jenis_layanan" placeholder="Masukan jenis_layanan" value="{{ $Rekam[0]->jenis_layanan }}" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keluhan">keluhan</label>
                                <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Masukan keluhan" value="{{ $Rekam[0]->keluhan }}" disabled>
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