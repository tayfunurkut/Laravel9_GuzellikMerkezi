	<section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About The Our</h3>
                <p>{!! $setting->aboutus !!}</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="{{$setting->twitter}}"><i class="icon-twitter"></i></a></li>
                  <li><a href="{{$setting->facebook}}"><i class="icon-facebook"></i></a></li>
                  <li><a href="{{$setting->instagram}}"><i class="icon-instagram"></i></a></li>
                  <li><a href="{{$setting->youtube}}"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="/faq">Faq</a></li>
                  <li><a href="/about">About</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>{{$setting->address}}</span></li>
                  <li><i class="icon-mail"></i><span>{{$setting->email}}</span></li>
                  <li><i class="icon-phone2"></i><span>{{$setting->phone}}</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2022  All Rights Reserved. Designed &amp; Developed with by Tayfun Ürkut</p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>


    </div>
    <!-- END wrapper -->
    

    <script src="{{ asset('assets')}}/js/scripts.min.js"></script>
    <script src="{{ asset('assets')}}/js/main.min.js"></script>
    <script src="{{ asset('assets')}}/js/custom.js"></script>
