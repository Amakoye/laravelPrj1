<!DOCTYPE html>
<html>
<head>
	<title>Basic Laravel Web</title>
	<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	@include('inc.navbar')<br><br>
	<div class="container">
		@if(Request::is(''))
			@include('inc.showcase')
		@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
				@include('inc.messages');
				@yield('content')

			</div>
			<!----->
			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>
	<footer id="footer" class="text-center">
		<p>Copyright 2019 &copy; Aladin</p>
	</footer>
</body>
</html>