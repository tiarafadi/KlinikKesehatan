@extends('layouts.master')


@section('title', 'Data Pasien')

@section('content')

@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush


<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data pasien</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pasien</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Table Data Pasien</h3>
                        </div>
                        <!-- /.card-header -->
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>nama pasein</th>
                                    <th>kode pasien</th>
                                    <th>nama dokter</th>
                                    <th>lahir</th>
                                    <th>agama</th>
                                    <th>status</th>
                                    <th>jenis kelamin</th>
                                    <th>telepon</th>
                                    <th>alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($Pasien as $key => $value)
                                <tr>
                                    <td>{{ $value->namapasien }}</td>
                                    <td>{{ $value->kodepasien }}</td>
                                    <td>{{ $value->namadokter }}</td>
                                    <td>{{ $value->lahir }}</td>
                                    <td>{{ $value->agama }}</td>
                                    <td>{{ $value->status }}</td>
                                    <td>{{ $value->jeniskelamin }}</td>
                                    <td>{{ $value->telepon }}</td>
                                    <td>{{ $value->alamat }}</td>
                                    <td>
                                        <form action="{{ route('Pasien.destroy', $value->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{ route('Pasien.show', $value->id) }}" class="btn-sm btn-info">Show</a>
                                            <a href="{{ route('Pasien.edit', $value->id) }}" class="btn-sm btn-warning">Edit</a>
                                            <button type="submit" class="btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td>Data Masih Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- <div class="card-footer">
                            <a class="btn btn-danger" href="{{ route('dashboard') }}">Kembali</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>

@endsection


@push('script')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush