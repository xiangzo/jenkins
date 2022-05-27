@include ('user/layouts/header')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url('user/images/hero_2.jpg');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
          <p data-aos="fade-up" data-aos="fade-up" data-aos-delay=""> <a href="https://free-template.co/" target="_blank"></a></p>
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">{!! $landingpage->cta !!}</h1>
          {{-- <div class="btn-play-wrap mx-auto" data-aos="fade-up" data-aos-delay="200">
            <a href="#" data-fancybox data-ratio="2"
                class="btn-play"><span class="ion ion-ios-play"></span></a>
          </div> --}}
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

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ml-auto mb-5 order-2">
          <span class="d-block text-uppercase text-primary">Who We Are</span>
          <h2 class="mb-4 section-title">CV Solusi Riset dan Teknologi Informasi</h2>
          <p>{!! $landingpage->deskripsi !!}</p>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus.</p>
          <p><a href="/about_us" class="btn btn-outline-black">Learn More</a></p>
        </div>
        <div class="col-lg-6 order-1">
          <figure class="img-dotted-bg">
            <img src="{{asset('user/images/about_1.jpg')}}" alt="Image" class="img-fluid">

            <img src="{{asset('user/images/work_1.jpg')}}" alt="Image" class="img-fluid img-absolute" data-aos="fade-left">

          </figure>

        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="">
            <span class="icon icon-magnet mb-4 d-block"></span>
            <h3>Designing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="100">
            <span class="icon icon-screen-desktop mb-4 d-block"></span>
            <h3>UI / UX</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="200">
            <span class="icon icon-screen-smartphone mb-4 d-block"></span>
            <h3>Web</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="300">
            <span class="icon icon-magnifier mb-4 d-block"></span>
            <h3>IOT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
      </div>
    </div>
  </div>



      </div>
    </div>
  </div>
  <!-- END .block-4 -->
  </div>
@include ('user/layouts/footer')
