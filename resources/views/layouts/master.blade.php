<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Google Tag Manager -->
	<script async src="js/fbevents.js"></script>
	<script type="text/javascript" async src="{{asset('js/analytics.js')}}"></script>
	<script async src="{{asset('js/gtm.js')}}"></script>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K9V338L');
	</script>
	<!-- End Google Tag Manager -->

	<meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="p:domain_verify" content="saion star">
	<link rel="shortcut icon" type="image/png" href="#">

	<title>Saigon Star - @yield('title')</title>
	<meta name="description" content="SaiGon star international school">
	<link rel="canonical" href="https://www.sgstar.edu.vn/">
	<!-- js -->
	<script  language="JavaScript" src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
	<!-- multi select -->
	<link rel="stylesheet" href="css/bootstrap-multiselect.css" media="all" >
	<noscript><link rel="stylesheet" href="css/bootstrap-multiselect.css"></noscript>
	<script type="text/javascript"  src="{{asset('js/bootstrap-multiselect.js') }}"></script>
	<!-- import bootstrap -->

	<script defer type="text/javascript" language="JavaScript" src="{{asset('js/bootstrap.min.js')}}"></script>

	<script defer type="text/javascript" language="JavaScript" src="{{asset('js/bootstrap-editable.js')}}"></script>
	<script defer type="text/javascript" src="{{asset('js/formValidation.js')}}"></script>
	<script defer type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
	<!-- end js -->

	<!-- css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" media="all" >
	<noscript><link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"></noscript>
	<link rel="stylesheet" href="{{asset('css/bootstrap-editable.css')}}" media="all" >
	<noscript><link rel="stylesheet" href="{{asset('css/bootstrap-editable.css')}}"></noscript>

	<link rel="stylesheet" href="{{asset('css/formValidation.css')}}" media="all" >
	<noscript><link rel="stylesheet" href="{{asset('css/formValidation.css')}}"></noscript>

	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" media="all" >
	<noscript><link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"></noscript>
	<!-- tinymce -->
	<script defer type="text/javascript" src="{{ asset('js/tinymce.min.js')}}"></script>

	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<noscript><link rel="stylesheet" href="{{asset('css/effect-ken-burns.css')}}"></noscript>

	<noscript><link rel="stylesheet" href="{{asset('css/slick.css')}}"></noscript>

	<script defer type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
	<script defer type="text/javascript" src="{{asset('js/banner-main.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/ihover.min.css')}}">
	<script defer  language="JavaScript" src="{{asset('js/custom.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
	<link rel="stylesheet" href="{{asset('css/megamenu.css')}}">
	<link href="{{asset('css/main.css')}}" rel="stylesheet">
	<link href="{{asset('css/styles.css')}}" rel="stylesheet">
	<link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/bannermain.css')}}" rel="stylesheet">
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

	<!-- end css -->
</head>
<body>
<div id="menu_scroll" class="">
	{{-- Gọi code trang header --}}

	@include('inc.header')
	<div class="clr"></div>

	{{-- Gọi code trang menu --}}
	<nav class="navbar navbar-default menutop_wrap" role="navigation">

	@include('inc.menu')

	</nav>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		var w_width = $(window).width();
		if(w_width > 1024){
		    $(".dropdown").hover(
		        function() {
		            $('.dropdown-menu', this).stop( true, true ).slideDown(200);
		            $(this).toggleClass('open');
		        },
		        function() {
		            $('.dropdown-menu', this).stop( true, true ).slideUp(200);
		            $(this).toggleClass('open');
		        }
		    );
		}

	});
</script>
@include('inc.banner')
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
@yield('content')
<div class="clr"></div>
@include('layouts.latest-news')
<div class="clr"></div>
@include('layouts.community-voices')
<div class="clr"></div>
@include('inc.footer')
</body>
</html>
