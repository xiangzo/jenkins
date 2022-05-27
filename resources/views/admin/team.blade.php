@extends('admin/layouts/template')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tim</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Tim</li>
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
                  <h3 class="card-title">Data Tim</h3>
                  <a href="{{ url('team-create') }}" class="btn btn-primary btn-sm" style="float: right">Tambah Data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Jabatan</th>
                      <th>Nomor WhatsApp</th>
                      <th>Instagram</th>
                      <th>Foto</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($team as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td>{{ $item['posisi'] }}</td>
                                <td>{{ $item['wa'] }}</td>
                                <td>{{ $item['ig'] }}</td>
                                <td><img src="{{ url('').$item['foto'] }}" alt="" width="120px"></td>
                                <td>
                                    <a href="/team-edit/{{ $item['slug'] }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="/team/delete/{{ $item['slug'] }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
