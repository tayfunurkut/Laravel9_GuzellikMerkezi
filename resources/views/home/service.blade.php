@extends('layouts.home')

@section('title', 'Beauty-Center')

@section('content')


<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Service Detay</h1>
				</div>
			</div>
		</div>
	</div>


<div class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Service</h2>
						<p>Service Detay Sayfası</p>
					</div>
				</div>
			</div>
			@include('home.messages')
			<div class="row">


				<div class="col-xl-8 col-lg-8 col-12">
					<form action="{{ route('user_appointments')}}" method="post" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="price" value="{{$data->price}}">
					<input type="hidden" name="id" value="{{$data->id}}">
					<div class="blog-inner-details-page">
						<div class="blog-inner-box ">
							<div class="side-blog-img">
								<img class="img-fluid" src="{{ Storage::url($data->image) }}" alt="">							
								<div class="date-blog-up">
									{{$data->created_at}}
								</div>
							</div>
							<div class="inner-blog-detail details-page">
								<h3>{{$data->title}}</h3>
								<p>{{$data->description}}</p>
								
								<p>{!! $data->detail !!}</p>
							</div>
							<button type="submit" class="btn btn-primary">Appointment</button>
						</div>
						</form>
						<div class="blog-comment-box mt-5">
							<h3>Comments</h3>
							
							@foreach($comment as $cm)
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<h4>{{$cm->user->name}}
											<h6><strong>Service Oran: @if($cm->rate==1)
										<strong>*</strong>
										@endif
										@if($cm->rate==2)
										<strong>**</strong>
										@endif
										@if($cm->rate==3)
										<strong>***</strong>
										@endif
										@if($cm->rate==4)
										<strong>****</strong>
										@endif
										@if($cm->rate==5)
										<strong>*****</strong>
										@endif</strong></h6>
										</div>
											<div>
												<p>{{$cm->comment}}</p>
												
											</div>
										</div>
									</div>
									@endforeach
								</div>
							


						</div>

						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 ">
						<div class="right-side-blog">
							<h3>Service Detay</h3>
							<div class="post-box-blog">
								<div class="recent-post-box">
									
									
									<div class="recent-box-blog">
										<div class="recent-img">
											<img class="img-fluid" src="images/post-img-01.jpg" alt="">
										</div>
										<div class="recent-info">
											<ul>
												<li><i class="zmdi zmdi-account"></i>Posted By : <span>Rubel Ahmed</span></li>
												<li>|</li>
												<li><i class="zmdi zmdi-time"></i>Time : <span>11.30 am</span></li>
											</ul>
											<h1>{{$data->price}} TL</h1>
										</div>
									</div>
								</div>
							</div>
							<h3>{{$data->keywords}}</h3>
						
						</div>
						</div>
						</div>


						<div class="comment-respond-box">
							<div class="comment-respond-form">
								<form id="commentrespondform" action="{{route('storecomment')}}" class="comment-form-respond row" method="post">
								@csrf
								<input type="hidden" name="service_id" value="{{$data->id}}">	
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="form-group" for="textarea_com"> Yorumunuz:</label>
											<textarea style="width: 100%; height: 120px; resize: none;" class="form-control" id="textarea_com" name="comment" placeholder="Your Message" rows="2"></textarea>
										</div>
										<div class="form-group">
											<label class="form-group" for="yildiz">Yıldız Seçiniz</label>
											<select style="width: 100%;" name="rate" id="yildiz">
												<option value="1">*</option>
												<option value="2">**</option>
												<option value="3">***</option>
												<option value="4">****</option>
												<option value="5">*****</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										@auth
										<button class="btn btn-primary">Submit comment</button>
										@else
										<a href="/login" class="btn btn-primary"> Login</a>
										@endauth
									</div>
								</form>
							</div>
						</div>
					
				</div>
			
				
			
			</div>
		</div>
	</div>

@endsection()