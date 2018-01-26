<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SofyNut | @yield('titulo') </title>
<!-- Stylesheets -->
<link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('front/css/revolution-slider.css')}}" rel="stylesheet">
<link href="{{asset('front/css/style.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{asset('front/css/responsive.css')}}" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>
	<div class="page-wrapper">
		@include('front.partial.header')
	

		<div class="contenedor">
			@yield('content')
		</div>
	
		@include('front.partial.footer')

	</div>
	<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-long-arrow-up"></span></div>


	<script src="{{asset('front/js/jquery.js')}}"></script> 
	<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<script src="{{asset('front/js/revolution.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.fancybox.pack.js')}}"></script>
	<script src="{{asset('front/js/jquery.fancybox-media.js')}}"></script>
	<script src="{{asset('front/js/jquery.countdown.js')}}"></script>
	<script src="{{asset('front/js/owl.js')}}"></script>
	<script src="{{asset('front/js/wow.js')}}"></script>
	<script src="{{asset('front/js/script.js')}}"></script>
</body>
</html>