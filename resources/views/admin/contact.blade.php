@extends('admin/layouts/template')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pesan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
              <li class="breadcrumb-item active">Pesan</li>
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
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <div class="card-header">
                  <h3 class="card-title">Pesan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($contact as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item['nama'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td>{{ $item['subject'] }}</td>
                                <td>
                                    @if ($item->status == '1')
                                        <button class="btn btn-success btn-xs"><i class="fas fa-check"></i> Sudah Dibaca</button>
                                    @elseif($item->status == '2')
                                        <button class="btn btn-warning btn-xs"><i class="fas fa-times"></i> Belum Dibaca</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="/contact-detail/{{ $item->id }}" class="btn btn-info btn-sm"><i class="fas fa-info"></i></a>
                                    <a href="/contact/delete/{{ $item->id }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
