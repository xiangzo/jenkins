@extends('admin/layouts/template')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
                        <li class="breadcrumb-item active">Produk</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="card-header">
                            <h3 class="card-title">Data Produk</h3>
                            <a href="{{ url('product-create') }}" class="btn btn-primary btn-sm"
                                style="float: right">Tambah Data</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Deksripsi</th>
                                        <th>URL</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($product as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item['nama'] }}</td>
                                            <td>{!! $item['deskripsi'] !!}</td>
                                            <td>{{ $item['url'] }}</td>
                                            <td><img src="{{ url('') . $item['foto'] }}" alt="" width="120px"></td>
                                            <td>
                                                <a href="/product-detail/{{ $item['slug'] }}"
                                                    class="btn btn-success btn-sm"><i class="fas fa-images"></i></a>
                                                <a href="/product/delete/{{ $item['id'] }}"
                                                    class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
