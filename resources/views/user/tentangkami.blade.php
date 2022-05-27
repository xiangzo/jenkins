@include ('user/layouts/header')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
style="background-image: url('user/images/hero_2.jpg');">
<div class="container">
  <div class="row slider-text align-items-center justify-content-center text-center">
    <div class="col-lg-12 col-sm-12">
      <h1 class="mb-4" data-aos="fade-up" data-aos-delay="">About Us</h1>

    </div>
  </div>
</div>
</div>

<div class="section">
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-6 order-md-2" data-aos="fade-up" data-aos-delay="100">
      <figure class="img-dotted-bg">
        <img src="{{asset('user/images/hero_2.jpg')}}" alt="Image" class="img-fluid">
      </figure>
    </div>
    <div class="col-md-5 mr-auto" data-aos="fade-up" data-aos-delay="">
      <h2 class="mb-4 section-title"><strong>CV Solusi Riset dan Teknologi Informasi</strong></h2>
      <p>Kami memiliki beberapa produk, seperti deteksi kualitas air kolam koi untuk produk ini yang terbantu adalah masyarakat pembudidaya ikan koi, penggemar koi, dan komunitas yang berhubungan dengan penggemar koi.</p>
    </div>
  </div>
</div>
</div>

<div class="section">
<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="">
      <h2 class="mb-4 section-title">Meet Our <strong>Team</strong></h2>
    </div>
  </div>
  <div class="row">
    @foreach ($team as $item)
        <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="media d-block media-custom text-center">
            <a href="#"><img src="{{ $item->foto }}" alt="Image" class="img-fluid square"></a>
            <div class="media-body">
            <h3 class="mt-0 text-black">{{ $item->nama }}</h3>
            <p>{{ $item->posisi }}</p>
            <a href="{{ $item->wa }}" class="p-2"><span class="fa fa-whatsapp"></span></a>
            <a href="{{ $item->ig}}" class="p-2"><span class="fa fa-instagram"></span></a>
            {{-- <a href="{{ $item->ig }}" class="p-2"><span class="fa fa-gmail"></span></a> --}}
            </div>
        </div>
        </div>
    @endforeach
  </div>

</div>
</div>
<!-- END section -->

<div class="section bg-light block-11">

</div>
<!-- END .block-4 -->
</div>
@include ('user/layouts/design')
@include ('user/layouts/footer')
