@extends('admin/layouts/template')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Halaman Utama</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Halaman Utama</li>
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
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
              <div class="card-header">
                <h3 class="card-title">Halaman Utama</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/landingpage-update" method="POST">
                <div class="card-body">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputCTA1">CTA</label>
                    <textarea id="cta" class="form-control" name="cta" rows="10" cols="40">{{ $landingpage->cta }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputVisi1">Visi</label>
                    <textarea id="visi" class="form-control" name="visi" rows="10" cols="40">{{ $landingpage->visi }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputMisi1">Misi</label>
                    <textarea id="misi" class="form-control" name="misi" rows="10" cols="40">{{ $landingpage->misi }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNoHp1">Nomor Telepon</label>
                    <input type="number" name="no_hp" class="form-control" id="exampleInputNoHp1" placeholder="Nomor Telepon" value="{{ $landingpage->no_hp }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{ $landingpage->email }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">URL Instagram</label>
                    <input type="text" name="ig" class="form-control" id="exampleInputEmail1" placeholder="URL Instagram" value="{{ $landingpage->ig }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">URL Facebook</label>
                    <input type="text" name="fb" class="form-control" id="exampleInputEmail1" placeholder="URL Facebook" value="{{ $landingpage->fb }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputMisi1">Alamat</label>
                    <textarea id="alamat" class="form-control" name="alamat" rows="10" cols="40">{{ $landingpage->alamat }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputMisi1">Deskripsi</label>
                    <textarea id="deskripsi" class="form-control" name="deskripsi" rows="10" cols="40">{{ $landingpage->deskripsi }}</textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
   var cta = document.getElementById("cta");
     CKEDITOR.replace(cta,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
<script>
    var visi = document.getElementById("visi");
      CKEDITOR.replace(visi,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
</script>
<script>
    var misi = document.getElementById("misi");
      CKEDITOR.replace(misi,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
</script>
<script>
    var deskripsi = document.getElementById("deskripsi");
      CKEDITOR.replace(deskripsi,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
</script>
<script>
    var alamat = document.getElementById("alamat");
      CKEDITOR.replace(alamat,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
</script>
@endpush
