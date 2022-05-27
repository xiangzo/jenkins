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
                <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/team">Tim</a></li>
                <li class="breadcrumb-item active">Tambah Anggota</li>
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/team-store" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" name="posisi" class="form-control" id="exampleInputEmail1" placeholder="Jabatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNoHp1">Nomor Telepon</label>
                    <input type="number" name="wa" class="form-control" id="exampleInputNoHp1" placeholder="Nomor WhatsApp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">URL Instagram</label>
                    <input type="text" name="ig" class="form-control" id="exampleInputEmail1" placeholder="URL Instagram">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" accept=".jpg,.jpeg,.png,.JPG,.JPEG,.PNG" class="custom-file-input" id="foto" name="foto" onchange="previewFile(this)">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@push('js')
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
    $(function () {
      bsCustomFileInput.init();
    });
</script>
<script>
  function previewFile(input) {
    var File = $("input[type=file]").get(0).files[0];
      if (file) {
        var reader = new FileReader();
        reader.onload = function(){
          $('#previewImg').attr("src", reader.result);
        }
        reader.readAsDataURL(File);
      }
  }
</script>
@endpush
