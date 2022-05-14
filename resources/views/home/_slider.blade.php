<div id="slides" class="cover-slides">
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
	</div>
	<!-- End slides -->