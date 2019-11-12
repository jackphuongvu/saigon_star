@extends('layouts.master')
@section('content')
<div class="full left" id="banner_subpage">
	<div id="subpage_Carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
          	<div class="carousel-inner" >
                    <div class="item active">
		                <img src="{{asset('images/banner/Mid_Autumn_Festival_01.jpg')}}" class="img-responsive">
		            </div>
	        		<div class="item ">
		                <img src="{{asset('images/banner/Mid_Autumn_Festival_02.jpg')}}" class="img-responsive">
		            </div>
	        		<div class="item ">
		                <img  src="{{asset('images/banner/Mid_Autumn_Festival_03.jpg')}}" class="img-responsive">
		            </div>
	        		<div class="item ">
		                <img src="{{asset('images/banner/Mid_Autumn_Festival_04.jpg')}}" class="img-responsive">
		            </div>
            </div>
            <!-- breadcrumb -->
            <div class="site-breadcrumb breadcrumb_w">
                <div class="w_1280">
                    <div class="breadcrumb_w2">
                        <span vocab="http://schema.org/" typeof="BreadcrumbList">
                        <ol class="breadcrumb">
                        <li>
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" href="#">
                                    <span property="name">Home Page</span>
                                </a>
                                <meta property="position" content="1">
                            </span>
                        </li>
                        <li class="active">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="OurSharedVision.html" property="item" typeof="WebPage">
                                    <span property="name">Our Shared Vision </span>
                                </a>
                                <meta property="position" content="2">
                            </span>

                        </li>
                        </ol>
                        </span>
                    </div>
                </div>
            </div>
            <!-- /breadcrumb -->
	</div>	
</div>

<div class="clr"></div>
<div class="full left subpage_content pgadmision">
	<div class="w_1280">
		<div class="w_1280_ad_top">
			<div class="full left bg_f6f6f6 box_faculty">

				<div class="w_1280">
					<div class="box_3_title"><h1>Our Mission & Shared Vision</h1></div>

                            <div class="clr"></div>
                            <div class="box_3_title">
                                <h3>Our Mission</h3>
                                <span style="text-align: center; color: green">To be recognised, externally, as a leading IPC school.</span>
                            </div>
                            
                            <div class="box_3_title"><h3>Our Shared Vision</h3></div>

                            <div class="box_3_des">
                                <p><img style="display: block; margin-left: auto; margin-right: auto;" src="images/Vision-150x150.png" width="700" height="467"></p>
                                <p>As one of the most family-friendly international schools in Ho Chi Minh City Vietnam, we understand that for parents, the single most important factor when choosing a school is the school's shared vision. Above all else, it is the most influential factor in determining the type of person a child will become. To be truly effective, a shared vision is one that is shared not only among teachers, but among parents and learners, so that we are all working towards the same goal. Here's ours:.</p>
                            </div>

                            <div class="box_3_des">
                                <p><img style="display: block; margin-left: auto; margin-right: auto;"  width="700" height="467"></p>
                                <p>Our core belief at Saigon Star is that education should help children to develop a balance of academic achievement and personal qualities, that will support them as life-long learners and enable them to contribute in meaningful ways to our rapidly-changing, global society..</p>
                            </div>	
                             <div class="box_3_title"><h3>Intelligence plus character – that is the true goal of education.” -Martin Luther King Jr.</h3></div>			

                    <div class="clr"></div>
	            </div>

            </div>



	</div>
</div>
<script type="text/javascript">
	$('.box_3_mobile').slick({
	  infinite: true,
	  slidesToShow: 2,
	  slidesToScroll: 2,
	  prevArrow: '<a class="slick-prev"></a>',
	  nextArrow: '<a class="slick-next"></a>',
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2,
	        infinite: true
	        
	      }
	    },	    
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }	    
	  ]
	});
</script>

<div class="clr"></div>

@endsection