  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-5 mb-5 pl-md-5">
          <div class="mb-5">
            <h3 class="mb-4">Info Kontak</h3>
            <ul class="list-unstyled footer-link quick-contact">
              <li class="d-block">
                <span class="d-block caption">Address:</span>
                <span class="caption-text">{!! $landingpage->alamat !!}</span>
              </li>
              <li class="d-block">
                <span class="d-block caption">Telephone:</span><span class="caption-text">{{ $landingpage->no_hp }}</span>
              </li>
              <li class="d-block">
                <span class="d-block caption">Email:</span><span class="caption-text">{{ $landingpage->email }}</span>
              </li>
            </ul>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>


        </div>


      </div>
      <div class="row">
        <div class="col-12 text-md-center text-left">
          <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
              <p class="copyright"><small>&copy;
                  <script>document.write(new Date().getFullYear());</script> Cardboard. All Rights Reserved. Design by <a
                    href="https://free-template.co" target="_blank">Free-Template.co</a></small></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#ffc107" /></svg></div>

  <script src="{{asset('user/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('user/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('user/js/popper.min.js')}}"></script>
  <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('user/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('user/js/aos.js')}}"></script>
  <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>
