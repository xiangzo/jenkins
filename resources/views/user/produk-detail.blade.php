@include ('user/layouts/header')
    <div class="slider-item overlay" data-stellar-background-ratio="0.5" style="background-image: url({{ $product->foto }});">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center text-center">
        <div class="col-lg-12 col-sm-12">
          <h1 class="mb-4">{{ $product->nama }}</h1>
        </div>
      </div>
    </div>
  </div>


  <div class="section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7">
          <a href="#" class="mb-3 d-block" data-fancybox="gal"><img src="{{ $product->foto }}" alt="Image" class="img-fluid"></a>
          @foreach ($product_detail as $item)
            {{-- {{ dd($product_detail) }} --}}
            <a href="#" class="mb-3 d-block" data-fancybox="gal"><img src="{{ url('').$item['image'] }}" alt="Image" class="img-fluid"></a>
          @endforeach
        </div>
        <div class="col-lg-4 ml-auto">
          <div class="block-fixed">
            <h3 class="mb-4">Product Details</h3>
            <p>{!! $product->deskripsi !!}</p>
            {{-- <ul class="list-unstyled mb-5">
              <li class="mb-3">
                <strong class="d-block text-black">Role:</strong>
                Design, Front-end, WordPress, CMS
              </li>
              <li>
                <strong class="d-block text-black">Client:</strong>
                Googled Inc.
              </li>
            </ul> --}}
            <p><a href="{{ $product->url }}" class="btn btn-outline-black ">Watch Video</a></p>
            <p><a href="{{ url('buy/'.$product->slug) }}" class="btn btn-outline-black ">BUY NOW</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>

  
  @include ('user/layouts/design')
  @include ('user/layouts/footer')
