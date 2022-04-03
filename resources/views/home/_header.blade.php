	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="{{ asset('assets')}}/index.html">
					<img src="{{ asset('assets')}}/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{ asset('assets')}}/index.html">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ asset('assets')}}/menu.html">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ asset('assets')}}/about.html">About</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{ asset('assets')}}/#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{ asset('assets')}}/reservation.html">Reservation</a>
								<a class="dropdown-item" href="{{ asset('assets')}}/stuff.html">Stuff</a>
								<a class="dropdown-item" href="{{ asset('assets')}}/gallery.html">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{ asset('assets')}}/#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{ asset('assets')}}/blog.html">blog</a>
								<a class="dropdown-item" href="{{ asset('assets')}}/blog-details.html">blog Single</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ asset('assets')}}/contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>