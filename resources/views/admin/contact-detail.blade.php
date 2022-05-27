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
              <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Detail Pesan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="{{ $contact->nama }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" value="{{ $contact->email }}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Subjek</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" value="{{ $contact->subject }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="pesan" id="" cols="30" rows="10" disabled>{{ $contact->pesan }}</textarea>
                        </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-default float-right">Kembali</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
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
