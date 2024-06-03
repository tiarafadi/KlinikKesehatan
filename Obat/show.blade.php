@extends('loyouts.master')
@section('title', 'Obat')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Obat</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Obat</a></li>
                        <li class="breadcrumb-item active">Obat</li>
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
                            <h3 class="card-title">Obat : {{ $Obat[0]->nama }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode">kode_obat</label>
                                    <input type="text" class="form-control" name="kode_obat" id="kode_obat" placeholder="Masukkan kode obat" value="{{ $Obat[0]->kode_obat }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama">nama_obat</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama obat" value="{{ $Obat[0]->nama_obat }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="id">id_jenis</label>
                                    <input type="text" class="form-control" name="id_jenis" id="id_jenis" placeholder="Masukan id jenis" value="{{ $Obat[0]->id_jenis }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="expired">expired</label>
                                    <input type="text" class="form-control" name="expired" id="expired" placeholder="Masukan expired" value="{{ $Obat[0]->expired}}" disabled>
                                </div>
                                <div class="form-group">
                                     <label for="stok">stok</label>
                                     <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukan stok" value="{{ $Obat[0]->stok}}" disabled>
                                </div>
                                <div class="form-group">
                                     <label for="dosis">dosis</label>
                                     <input type="text" class="form-control" name="dosis" id="dosis" placeholder="Masukan dosis" value="{{ $Obat[0]->dosis}}" disabled>
                                </div>
                                 <div class="form-group">
                                    <label for="photo">photo</label>
                                    <input type="text" class="form-control" name="photo" id="photo" placeholder="Masukan photo" value="{{ $Obat[0]->photo}}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="harga">harga</label>
                                    <input type="text" class="form-control" name="harga" id="photo" placeholder="Masukan harga" value="{{ $Obat[0]->harga}}" disabled>
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