<<<<<<< HEAD
=======
<!-- <div id="slides" class="cover-slides">
		<ul class="slides-container">
			@foreach($sliderdata as $data)
			<li class="text-center">
				<img src="{{ Storage::url($data->image) }}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>{{$data->title}}</strong></h1>
							<p class="m-b-40">{!! $data->detail !!}}</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
						</div>
					</div>
				</div>
			</li>
			@endforeach
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div> -->
	<!-- End slides -->






>>>>>>> 7bd1b148b2fad6b4e7db427864e6fe7a3e30cb9d
	<section class="flexslider">
        <ul class="slides">

		@foreach($sliderdata as $data)
          <li style="background-image: url('{{ Storage::url($data->image) }}')" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">{{$data->title}}</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
		  @endforeach
         
        </ul>
<<<<<<< HEAD
      </section>



=======
      </section>
>>>>>>> 7bd1b148b2fad6b4e7db427864e6fe7a3e30cb9d
