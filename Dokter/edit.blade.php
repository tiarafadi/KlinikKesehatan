@extends('layouts.master')

@push('css')

@endpush

@section('content')
<div class="content-wrapper">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data Dokter</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('Dokter.update', $Dokter->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="form-group">
                  <label for="nama">Nama Dokter</label>
                  <input type="text" class="form-control" name="nama_dokter" id="namadokter" placeholder="Masukkan Nama Dokter" value="{{ $Dokter->nama_dokter }}">
              </div>
              <div class="form-group">
                  <label for="kode">Kode Dokter</label>
                  <input type="text" class="form-control" name="kode_dokter" id="kodedokter" placeholder="Masukkan Kode Dokter" value="{{ $Dokter->kode_dokter }}">
              </div>
              <div class="form-group">
                  <label>Jadwal Praktek</label>
                  <textarea class="form-control" rows="3" name="jadwal_praktek" id="kodedokter" placeholder="Masukkan Jadwal praktek">{{ $Dokter->jadwal_praktek }}</textarea>
              </div>
              <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select class="custom-select" name="jenis_kelamin">
                      <option disabled>Select Jenis Kelamin</option>
                      <option value="Laki-Laki" {{ $Dokter->jk == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                      <option value="Perempuan" {{ $Dokter->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Telepon</label>
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      </div>
                      <input type="text" class="form-control" name="telepon" placeholder="Masukkan Nomer Telepon" value="{{ $Dokter->telepon }}" >                  </div>
              </div>
              {{-- <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat">{{ $Dokter->alamat }}</textarea>
              </div> --}}
          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          
            </form>
        </div>
    </div>
</div>
@endsection
