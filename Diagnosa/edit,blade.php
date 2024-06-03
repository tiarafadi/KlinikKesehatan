@extends('loyouts.master')

@push('css')

@endpush

@section('content')
            <div class="content-wrapper">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Diagnosa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('Diagnosa.update' , $Diagnosa->id) }}" method="POST"> 
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="diagnosa">Diagnosa:</label>
                    <input type="text" name="Diagnosa" id="Diagnosa" class="form-control @error('Diagnosa') is-invalid @enderror"  placeholder="Masukkan Dignosa">
                  </div>
                  @error('Nama')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="no">no:</label>
                    <input type="number" name="no" id="no" class="form-control @error('no') is-invalid @enderror" placeholder="Masukkan NO">
                  @error('no')
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
                    <label for="telpon">telpon:</label>
                    <input type="number" name="telpon" id="telpon" class="form-control @error('telpon') is-invalid @enderror" placeholder="Masukkan nomor telpon">
                  @error('telpon')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="rekam">rekam:</label>
                    <input type="text" name="rekam" id="rekam" class="form-control @error('rekam') is-invalid @enderror" placeholder="Masukkan rekam medis">
                  @error('rekam')
                    <div class="text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('Dokter.index') }}" class="btn btn-danger float-right"><i class="fas fa-close"></i>Back</a>
                </div>
              </form>
            </div>

@endsection