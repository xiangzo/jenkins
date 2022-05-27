@include('admin/layouts/header')
@include('admin/layouts/navbar')
@include('admin/layouts/sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
        @yield('content')
    </section>
  </div>
  <!-- /.content-wrapper -->
@include('admin/layouts/footer')