@include ('user/layouts/header')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
style="background-image: url('user/images/hero_2.jpg');">
<div class="container">
  <div class="row slider-text align-items-center justify-content-center text-center">
    <div class="col-lg-12 col-sm-12">
      <h1 class="mb-4" data-aos="fade-up" data-aos-delay="">Contact Us</h1>

    </div>
  </div>
</div>
</div>

<div class="section">
<div class="container">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
  <div class="row mb-5">
    <div class="col-12 mb-5 order-2">
      <form action="/pesan" method="POST">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" class="form-control " name="nama">
          </div>
          <div class="col-md-6 form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control " name="email">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="subject">Subjek</label>
            <input type="text" id="subject" class="form-control " name="subject">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 form-group">
            <label for="message">Pesan</label>
            <textarea name="pesan" id="message" class="form-control " cols="30" rows="8"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 form-group">
            <button type="submit" value="" class="btn btn-outline-black px-3 py-3">Kirim Pesan</button>
          </div>
        </div>
      </form>
    </div>


  </div>

</div>
</div>


<!-- END .block-4 -->
@include ('user/layouts/design')
@include ('user/layouts/footer')
