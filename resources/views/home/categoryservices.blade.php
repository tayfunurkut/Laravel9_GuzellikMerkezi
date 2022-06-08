@extends('layouts.home')

@section('title', 'Beauty-Center')

@section('content')


<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>{{$category->title}}</h1>
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
                  <h3>{{$category->title}}</h3>
                  <p>{{$category->description}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>









<section class="probootstrap-section">
        <div class="container">
          <div class="row">

          @foreach($services as $tf)
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{Storage::url($tf->image)}}" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>{{$tf->title}}</h3>
                  <p>{{$tf->description}}</p>
                  <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count"><h3>{{$tf->price}} ₺ </h3></span></p>
                </div>
              </div>


            </div>
            @endforeach
            
            
          </div>

          
        </div>
      </section>


@endsection()