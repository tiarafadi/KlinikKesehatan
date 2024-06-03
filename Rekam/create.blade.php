@extends('rekam.master')
@section('title', 'rekam')

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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            <h3 class="card-title">Form rekam</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('Rekam.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode">kode pasien</label>
                                    <input type="number" class="form-control" name="kode" id="kode" placeholder="Masukkan kode pasien">
                                </div>
                                <div class="form-group">
                                    <label for="nama_pasein">Nama Pasien</label>
                                    <input type="text" class="form-control" name="nama pasien" id="nama pasien" placeholder="Masukan Nama Pasien">
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="custom-select" name="jk">
                                        <option selected disabled></option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>No Tlp.</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="tlp" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan Nomer Telepon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kode">Jenis_layanan</label>
                                <input type="text" class="form-control" name="jenis_layanan" id="jenis_layanan" placeholder="Masukkan jenis layanan">
                            </div>
                            <div class="form-group">
                                <label for="kode">keluhan</label>
                                <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Masukkan keluhan">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection