@extends('layouts.home')

@section('title', 'Beauty-Center')


@section('content')
    
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              
            <div class="container mt-3 text-light" style="">
                <center>
                    <h4><a style="color: white;" href="/">Home</a><span style="color: white;">/</span><a style="color: white;" href="/about">About</a></h4>
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
              <div class="probootstrap-flex-block w-100">
                <div class="probootstrap-text probootstrap-animate w-100">
                  <h3>About Us</h3>
                  <p>{!! $setting->aboutus !!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

@endsection