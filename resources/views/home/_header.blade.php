
  <div class="probootstrap-search" id="probootstrap-search">
      <a href="{{ asset('assets')}}/#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    </div>
         
    
      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"> <b>{{$setting->address}}</b></i></span>
              <span><i class="icon-phone2"> <b>{{$setting->phone}}</b></i></span>
              <span><i class="icon-mail"> <b>{{$setting->email}}</b></i></span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>

                @auth
                <li><a href="/logoutuser" class=""><i class="icon-user"> Logout</i></a></li>
                <li><a href="/userpanel" class=""><i class="fas fa-home"> User Panel</i></a></li>
                @endauth
                @guest
                <li><a href="/login" class=""><i class="icon-user"> Login</i></a></li>
                <li><a href="/register"><i class="icon-register">Register</i></a></li>
                @endguest
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header justify-content-center align-self-center">
           
            <a class="" href="/" title=""><img style="height: 60px;" src="{{ Storage::url($setting->icon) }}" alt=""></a>

          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="/">Home</a></li>
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
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
