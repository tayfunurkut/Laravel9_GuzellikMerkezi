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
      </section>



