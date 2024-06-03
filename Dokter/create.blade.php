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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                            <h3 class="card-title">FORM DOKTER</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('Dokter.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode">Kode Dokter</label>
                                    <input type="text" class="form-control" name="kode_dokter" id="kode" placeholder="Masukkan Kode Dokter">
                                </div>
                                 <div class="form-group">
                                    <label for="nama">Nama Dokter</label>
                                    <input type="text" class="form-control" name="nama_dokter" id="nama" placeholder="Masukkan Nama Dokter">
                                </div>
                                <div class="form-group">
                                    <label>Diagnosa</label>
                                    <textarea class="form-control" rows="3" name="diagnosa" placeholder="Masukan Diagnosa"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Jadwal Praktek</label>
                                    <textarea class="form-control" rows="3" name="jadwal_praktek" placeholder="Masukkan Jadwal praktek"></textarea>
                                </div>
                            </div>
                                
                                <div class="form-group">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="custom-select" name="jenis_kelamin">
                                        <option selected disabled></option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                               
                                <div class="form-group">
                                    <label>Telepon.</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="telepon" placeholder="Masukan Nomer Telepon">

                                        {{-- <input type="number" class="form-control" name="telepon" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Masukan Nomer Telepon"> --}}
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat"></textarea>
                                </div> --}}
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