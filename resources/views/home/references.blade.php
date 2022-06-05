@extends('layouts.home')

@section('title', 'Beauty-Center')


@section('content')
    
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              
            <div class="container mt-3 text-light" style="">
                <center>
                    <h4><a style="color: white;" href="">Home</a><span style="color: white;">/</span><a style="color: white;" href="">References</a></h4>
                 </center>
             </div>

            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <div class="text-uppercase probootstrap-uppercase">History</div>
                  <h3>References</h3>
                  <p>{{ $setting->references }}</p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_4.jpg)">
                  <a href="" class="btn-video "><i class=""></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

@endsection