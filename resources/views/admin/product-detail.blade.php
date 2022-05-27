@extends('admin/layouts/template')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">DetailProduk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="/product">Produk</a></li>
                        <li class="breadcrumb-item active">Detail Produk</li>
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
                            <h3 class="card-title">Tambah Foto</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="multiple-image-preview-ajax" method="POST" action="javascript:void(0)"
                            accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <input id="id_product" name="id_product" value="{{ $product->id }}" hidden />
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="images[]" class="custom-file-input" id="images"
                                                multiple="multiple">
                                            <label class="custom-file-label" for="images">Choose image</label>
                                        </div>
                                    </div>
                                    <div class="show-multiple-image-preview"> </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a onclick="history.back()" class="btn btn-danger text-white">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
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
                            <h3 class="card-title">Foto Produk</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($detail_product as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td><img src="{{ url('') . $item['image'] }}" alt="" width="120px"></td>
                                            <td>
                                                <a href="/product-detail/delete/{{ $item['id'] }}"
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
@push('js')
    <script type="text/javascript">
        $(document).ready(function(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(function() {
                // Multiple images preview with JavaScript
                var ShowMultipleImagePreview = function(input, imgPreviewPlaceholder) {
                    if (input.files) {
                        var filesAmount = input.files.length;
                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();
                            reader.onload = function(event) {
                                $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                                    imgPreviewPlaceholder);
                            }
                            reader.readAsDataURL(input.files[i]);
                        }
                    }
                };
                $('#images').on('change', function() {
                    ShowMultipleImagePreview(this, 'div.show-multiple-image-preview');
                });
            });
            $('#multiple-image-preview-ajax').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                let TotalImages = $('#images')[0].files.length; //Total Images
                let images = $('#images')[0];
                for (let i = 0; i < TotalImages; i++) {
                    formData.append('images' + i, images.files[i]);
                }
                formData.append('TotalImages', TotalImages);
                $.ajax({
                    type: 'POST',
                    url: "{{ url('upload-multiple-image-ajax') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        this.reset();
                        // alert('Images has been uploaded using jQuery ajax with preview');
                        // $('.show-multiple-image-preview').html("");
                        document.location.reload(true);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });
        });
    </script>
@endpush
