
  <div class="probootstrap-search" id="probootstrap-search">
      <a href="{{ asset('assets')}}/#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div>
         
    
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Brooklyn, NY 10036, United States</span>
              <span><i class="icon-phone2"></i>+1-123-456-7890</span>
              <span><i class="icon-mail"></i>info@probootstrap.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="{{ asset('assets')}}/#"><i class="icon-twitter"></i></a></li>
                <li><a href="{{ asset('assets')}}/#"><i class="icon-facebook2"></i></a></li>
                <li><a href="{{ asset('assets')}}/#"><i class="icon-instagram2"></i></a></li>
                <li><a href="{{ asset('assets')}}/#"><i class="icon-youtube"></i></a></li>
                <li><a href="{{ asset('assets')}}/#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="{{ asset('assets')}}/#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ asset('assets')}}/index.html" title="ProBootstrap:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="courses.html">Courses</a></li>
              <li><a href="teachers.html">Teachers</a></li>
              <li><a href="events.html">Events</a></li>
              <li class="dropdown">
              @php
                   $parentCategories = \App\Http\Controllers\HomeController::maincategorylist();
               @endphp

                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  @foreach($parentCategories as $tf)
                  <li><a href="{{route('categoryservice',['id'=>$tf->id])}}">{{$tf->title}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li><a href="/faq">Faq</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
