@extends('layouts.master')

@push('css')

@endpush

@section('content')
<div class="content-wrapper">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Pasien</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('Pasien.update', $Pasien->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                  <label for="nama">Nama Pasien</label>
                  <input type="text" class="form-control" name="nama_pasien" id="namapasien" placeholder="Masukkan Nama Pasien" value="{{ $Pasien->nama_pasien }}">
              </div>
              <div class="form-group">
                  <label for="kode">Kode Pasien</label>
                  <input type="text" class="form-control" name="kode_pasien" id="kodepasien" placeholder="Masukkan Kode Pasien" value="{{ $Pasien->kode_pasien }}">
              </div>
              <div class="form-group">
                <label for="nama">Nama Dokter</label>
                <input type="text" class="form-control" name="nama_dokter" id="namadokter" placeholder="Masukkan Nama Dokter" value="{{ $Pasien->nama_dokter }}">
            </div>
            <div class="form-group">
                <label for="lahir">Lahir</label>
                <input type="text" class="form-control" name="lahir" id="lahir" placeholder="Masukkan Tanggal Lahir" value="{{ $Pasien->lahir }}">
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" name="agama" id="agama" placeholder="Masukkan Agama" value="{{ $Pasien->agama }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" name="status" id="status" placeholder="Masukkan Status" value="{{ $Pasien->status }}">
            </div>
              <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="custom-select" name="jenis_kelamin">
                      <option disabled>Select Jenis Kelamin</option>
                      <option value="Laki-Laki" {{ $Pasien->jk == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                      <option value="Perempuan" {{ $Pasien->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Telepon</label>
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input type="text" class="form-control" name="telepon" placeholder="Masukkan Nomer Telepon" value="{{ $Pasien->telepon }}" >                        </div>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" value="{{ $Pasien->alamat }}">
            </div>
          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
            </form>
        </div>
    </div>
</div>
@endsection
