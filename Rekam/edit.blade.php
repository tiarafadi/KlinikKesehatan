@extends('loyouts.master')

@push('css')

@endpush

@section('content')
            <div class="content-wrapper">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Rekam</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('Rekam.update' , $Rekam->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="Nama_pasien">Nama_pasien:</label>
                    <input type="text" name="Nama_pasien" id="Nama_pasien" class="form-control @error('Nama_pasien') is-invalid @enderror"  placeholder="Masukkan Nama Pasien">
                  </div>
                  @error('Nama_pasien')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                  <div class="form-group">
                    <label for="kode_pasien">kode_pasien:</label>
                    <input type="text" name="kode_pasien" id="kode_pasien" class="form-control @error('kode_pasien') is-invalid @enderror" placeholder="Masukkan kode pasien">
                  @error('kode_pasien')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">alamat:</label>
                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat">
                  @error('alamat')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="telpon">telpon:</label>
                    <input type="number" name="telpon" id="telpon" class="form-control @error('telpon') is-invalid @enderror" placeholder="Masukkan nomor telpon">
                  @error('telpon')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_layanan">jenis_layanan:</label>
                    <input type="text" name="jenis_layanan" id="jenis_layanan" class="form-control @error('jenis_layanan') is-invalid @enderror" placeholder="Masukkan jenis layanan">
                  @error('jenis_layanan')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="keluhan">keluhan:</label>
                    <input type="text" name="keluhan" id="keluhan" class="form-control @error('keluhan') is-invalid @enderror" placeholder="Masukkan keluhan">
                  @error('keluhan')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('Pasien.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection