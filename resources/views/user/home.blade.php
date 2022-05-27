@include ('user/layouts/header')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url('user/images/hero_2.jpg');">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
          <p data-aos="fade-up" data-aos="fade-up" data-aos-delay=""> <a href="https://free-template.co/" target="_blank"></a></p>
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Motto</h1>
          <div class="btn-play-wrap mx-auto" data-aos="fade-up" data-aos-delay="200">
            <a href="#" data-fancybox data-ratio="2"
                class="btn-play"><span class="ion ion-ios-play"></span></a>
          </div>

        </div>
      </div>
    </div>
  </div>





  <div class="section portfolio-section">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">Latest Work</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis accusamus perferendis
            libero accusantium nisi.</p>
          <p><a href="#">View All Portfolio</a></p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row mb-5 no-gutters">
        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="100">
          <a href="portfolio-single.html" class="work-thumb">
            <div class="work-text">
              <h2>Startup Brand</h2>
              <p>Business</p>
            </div>
            <img src="{{asset('user/images/work_1.jpg')}}" alt="Image" class="img-fluid">
          </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="200">
          <a href="portfolio-single.html" class="work-thumb">
            <div class="work-text">
              <h2>Corporate Design</h2>
              <p>Design</p>
            </div>
            <img src="{{asset('user/images/work_2.jpg')}}" alt="Image" class="img-fluid">
          </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="300">
          <a href="portfolio-single.html" class="work-thumb">
            <div class="work-text">
              <h2>Unpacked Branding</h2>
              <p>Business</p>
            </div>
            <img src="{{asset('user/images/work_3.jpg')}}" alt="Image" class="img-fluid">
          </a>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="400">
          <a href="portfolio-single.html" class="work-thumb">
            <div class="work-text">
              <h2>Rebranding Work</h2>
              <p>Business</p>
            </div>
            <img src="{{asset('user/images/work_4.jpg')}}" alt="Image" class="img-fluid">
          </a>
        </div>

      </div>

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p><a href="portfolio.html" class="btn btn-outline-white px-4 py-3">More Portfolio</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ml-auto mb-5 order-2">
          <span class="d-block text-uppercase text-primary">Who We Are</span>
          <h2 class="mb-4 section-title">Do Things That Matters. Plan. Create. Grow.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id autem temporibus blanditiis accusamus perferendis libero accusantium nisi itaque tempore, harum aliquid aut, sapiente dolor tenetur. Tempora corrupti suscipit delectus perspiciatis!</p>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus.</p>
          <p><a href="#" class="btn btn-outline-black">Learn More</a></p>
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
            <h3>Branding Identity</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="200">
            <span class="icon icon-screen-smartphone mb-4 d-block"></span>
            <h3>Mobile Application</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="300">
            <span class="icon icon-magnifier mb-4 d-block"></span>
            <h3>Search Engine</h3>
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
  @include ('user/layouts/design')
@include ('user/layouts/footer')
