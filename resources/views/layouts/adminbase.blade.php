<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('admin')}}/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('admin')}}/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('admin')}}/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('admin')}}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('admin')}}/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('admin')}}/assets/css/demo.css">
	@yield('head')
</head>
<body data-background-color="dark">
	<div class="wrapper">
		@include('admin._header')
		@include('admin._sidebar')

		@section('content')
		@show()

		@include('admin._footer')


	</div>
	@yield('foot')
</body>
</html>