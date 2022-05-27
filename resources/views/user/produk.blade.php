@include ('user/layouts/header')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
style="background-image: url('user/images/hero_2.jpg');">
<div class="container">
  <div class="row slider-text align-items-center justify-content-center text-center">
    <div class="col-lg-12 col-sm-12">
      <h1 class="mb-4" data-aos="fade-up" data-aos-delay="">Product</h1>

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
      <h2 class="mb-4 section-title"><strong>Creativity</strong> is our DNA</h2>
      <p>{!! $landingpage->deskripsi !!}</p>
    </div>
  </div>
</div>
</div>

<div class="section portfolio-section">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">PORTFOLIO</h2>
          <p></p>

        </div>
      </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-5 no-gutters">
        @foreach ($product as $item)
                <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="100">
                <a href="{{ url('product/'.$item->slug) }}" class="work-thumb">
                    <div class="work-text">
                    <h2>{{ $item->nama }}</h2>
                    <p>IoT</p>
                    </div>
                    <img src="{{ $item->foto }}" alt="Image" class="img-fluid">
                </a>
                </div>
        @endforeach
    </div>
    </div>
  </div>

<!-- END section -->
</div>
@include ('user/layouts/design')
@include ('user/layouts/footer')
