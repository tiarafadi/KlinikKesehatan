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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            <h3 class="card-title">FORM PASIEN</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('Pasien.store')}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama pasien</label>
                                    <input type="text" class="form-control" name="namapasien" id="nama_pasien" placeholder="Masukkan Nama Pasien">
                                </div>
                                <div class="form-group">
                                    <label for="kode">Kode Pasien</label>
                                    <input type="text" class="form-control" name="kodepasien" id="kode_pasien" placeholder="Masukan Kode Pasien">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Dokter</label>
                                    <input type="text" class="form-control" name="namadokter" id="nama_dokter" placeholder="Masukan Nama Dokter">
                                </div>
                                <div class="form-group">
                                    <label for="lahir">Lahir</label>
                                    <input type="date" class="form-control" name="lahir" id="lahir" placeholder="Masukan tempat/tanggal lahir">
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" name="agama" id="agama" placeholder="Masukan agama">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" name="status" id="status" placeholder="Masukan Status">
                                </div>
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="custom-select" name="jeniskelamin">
                                        <option selected disabled></option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>No Telp.</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="telepon"  placeholder="Masukan Nomer Telepon">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat"></textarea>
                                </div>
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