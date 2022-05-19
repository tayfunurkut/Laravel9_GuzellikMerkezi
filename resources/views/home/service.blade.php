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
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-12">
					<div class="blog-inner-details-page">
						<div class="blog-inner-box">
							<div class="side-blog-img">
								<img class="img-fluid" src="{{ Storage::url($data->image) }}" alt="">							
								<div class="date-blog-up">
									{{$data->created_at}}
								</div>
							</div>
							<div class="inner-blog-detail details-page">
								<h3>{{$data->title}}</h3>
								<p>{{$data->description}}</p>
								<blockquote>
									<p>{!! $data->detail !!}</p>
								<!-- </blockquote> -->
								<p>Vestibulum quis ultricies enim. Quisque eu sapien a erat congue lacinia bibendum ac massa. Morbi vehicula aliquet libero sit amet dictum. Integer vel mauris non magna consequat porttitor. Nulla facilisi. Suspendisse posuere, elit eu fringilla congue, turpis magna tempor odio, a placerat magna tortor a mauris.</p>
							</div>
						</div>
						<div class="blog-comment-box">
							<h3>Comments</h3>
							<div class="comment-item">
								<div class="comment-item-left">
									<img src="images/avt-img.jpg" alt="">
								</div>
								<div class="comment-item-right">
									<div class="pull-left">
										
									</div>
									<div class="pull-right">
										<i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
									</div>
									<div class="des-l">
										<p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
									</div>
									<a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
								</div>
							</div>
							<div class="comment-item children">
								<div class="comment-item-left">
									<img src="images/avt-img.jpg" alt="">
								</div>
								<div class="comment-item-right">
									<div class="pull-left">
										<a href="#">Admin</a>
									</div>
									<div class="pull-right">
										<i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>1.30 pm</span>
									</div>
									<div class="des-l">
										<p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
									</div>
									<a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
								</div>
							</div>
							<div class="comment-item">
								<div class="comment-item-left">
									<img src="images/avt-img.jpg" alt="">
								</div>
								<div class="comment-item-right">
									<div class="pull-left">
										<a href="#">Rubel Ahmed</a>
									</div>
									<div class="pull-right">
										<i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
									</div>
									<div class="des-l">
										<p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
									</div>
									<a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
								</div>
							</div>
						</div>
						<div class="comment-respond-box">
							<h3>Leave your comment </h3>
							<div class="comment-respond-form">
								<form id="commentrespondform" class="comment-form-respond row" method="post">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<input id="name_com" class="form-control" name="name" placeholder="Name" type="text">
										</div>
										<div class="form-group">
											<input id="email_com" class="form-control" name="email" placeholder="Your Email" type="email">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<textarea class="form-control" id="textarea_com" placeholder="Your Message" rows="2"></textarea>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<button class="btn btn-submit">Submit comment</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
					<div class="right-side-blog">
						<h3>Recent Post</h3>
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
						<h3>Recent Tag</h3>
						<div class="blog-tag-box">
							<ul class="list-inline tag-list">
								<li class="list-inline-item"><a href="#">{{$data->keywords}}</a></li>
							</ul>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>

@endsection()