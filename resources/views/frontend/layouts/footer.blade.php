  <!-- Footer Start -->
  <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
      <div class="container mt-5 pt-5">

          <div class="row">
              <div class="col-md-4 mb-2">
                  <h3 class="text-white mb-4">{{ $home->footer_title_1 }}</h3>
                  <p><a href="{{ $siteContact->location_value }}"
                          class="text-white-50 mb-2" target="_blank"><i class="fa fa-map-marker-alt mr-2"></i>{{ $siteContact->location_name }}</a></p>

                  <p><a href="tel:{{$siteContact->number  }}" class="text-white-50 mb-2"><i
                              class="fa fa-phone-alt mr-2"></i>{{$siteContact->number  }}</a></p>
                  <p><a href="mailto:sagartimilsina.xdezo@gmail.com" class="text-white-50 mb-2"><i
                              class="fa fa-envelope mr-2"></i>{{$siteContact->email}}</a></p>
                  <div class="d-flex justify-content-start mt-4">
                      <a class="text-white mr-4" target="_blank" href="https://www.twitter.com"><i
                              class="fab fa-2x fa-twitter"></i></a>
                      <a class="text-white mr-4" target="_blank" href="https://www.facebook.com"><i
                              class="fab fa-2x fa-facebook-f"></i></a>
                      <a class="text-white mr-4" target="_blank" href="https://www.linkedin.com"><i
                              class="fab fa-2x fa-linkedin-in"></i></a>
                      <a class="text-white" target="_blank" href="https://www.instagram.com"><i
                              class="fab fa-2x fa-instagram"></i></a>
                  </div>
              </div>
              <div class="col-md-4 mb-2">
                  <h3 class="text-white mb-4">{{ $home->footer_title_2 }}</h3>
                  <div class="d-flex flex-column justify-content-start">
                      <a class="text-white-50 mb-2" href="{{ route('courses') }}"><i
                              class="fa fa-angle-right mr-2"></i>Web Design</a>
                      <a class="text-white-50 mb-2" href="{{ route('courses') }}"><i
                              class="fa fa-angle-right mr-2"></i>Apps Design</a>
                      <a class="text-white-50 mb-2" href="{{ route('courses') }}"><i
                              class="fa fa-angle-right mr-2"></i>Marketing</a>
                      <a class="text-white-50 mb-2" href="{{ route('courses') }}"><i
                              class="fa fa-angle-right mr-2"></i>Research</a>
                      <a class="text-white-50" href="{{ route('courses') }}"><i
                              class="fa fa-angle-right mr-2"></i>SEO</a>
                  </div>
              </div>
              <div class="col-md-4 mb-2">
                  <h3 class="text-white mb-4">{{ $home->footer_title_3 }}</h3>
                  <div class="d-flex flex-column justify-content-start">
                      <a class="text-white-50 mb-2" href="{{ route('privacy') }}"><i
                              class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                      <a class="text-white-50 mb-2" href="{{ route('terms_condition') }}"><i
                              class="fa fa-angle-right mr-2"></i>Terms & Condition</a>
                      <a class="text-white-50 mb-2" href="{{ route('about') }}"><i
                              class="fa fa-angle-right mr-2"></i>About
                          us</a>
                      <a class="text-white-50" href="{{ route('frontend-contact') }}"><i
                              class="fa fa-angle-right mr-2"></i>Contact</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="container-fluid bg-dark text-white-50 border-top py-4"
      style="border-color: rgba(256, 256, 256, .1) !important;">
      <div class="container">
          <div class="row">
              <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                  <p class="m-0">Copyright &copy; <a class="text-white" href="{{ route('about') }}">{{ $home->logo_name }}</a>. All
                      Rights Reserved.
                  </p>
              </div>
              <div class="col-md-6 text-center text-md-right">
                  <p class="m-0">Designed by <a class="text-white" href="{{ route('about') }}">{{ $home->copyrighter }}</a>
                  </p>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i
          class="fa fa-angle-double-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

  <!-- Template Javascript -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @stack('footer-link')
  </body>

  </html>
