@extends('loyouts.master')

@push('css')

@endpush

@section('content')
            <div class="content-wrapper">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Obat</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('Obat.update' , $Obat->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="kode_obat">Kode_obat:</label>
                    <input type="text" name="kode_obat" id="kode_obat" class="form-control @error('kode_obat') is-invalid @enderror"  placeholder="Masukkan kode obat">
                  </div>
                  @error('kode_obat')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="nama_obat">Nama_obat:</label>
                    <input type="text" name="nama_obat" id="nama_obat" class="form-control @error('kode_pasien') is-invalid @enderror" placeholder="Masukkan nama obat">
                  @error('kode_pasien')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="id_jenis">ID_jenis:</label>
                    <input type="text" name="id_jenis" id="id_jenis" class="form-control @error('id_jenis') is-invalid @enderror" placeholder="Masukkan id jenis">
                  @error('id_jenis')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="expired">Expired:</label>
                    <input type="text" name="expired" id="expired" class="form-control @error('expired') is-invalid @enderror" placeholder="Masukkan expired">
                  @error('expired')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="text" name="stok" id="stok" class="form-control @error('stok') is-invalid @enderror" placeholder="Masukkan stok">
                  @error('stok')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="dosis">Dosis:</label>
                    <input type="text" name="dosis" id="dosis" class="form-control @error('dosis') is-invalid @enderror" placeholder="Masukkan dosis">
                  @error('dosis')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="text" name="photo" id="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Masukkan photo">
                  @error('photo')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="text" name="harga" id="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Masukkan harga">
                  @error('harga')
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