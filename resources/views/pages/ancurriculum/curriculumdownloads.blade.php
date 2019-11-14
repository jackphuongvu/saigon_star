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
		                <img src="{{asset('images/banner/Mid_Autumn_Festival_03.jpg')}}" class="img-responsive">
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
				  		<a href="#" property="item" typeof="WebPage">
				  			<span property="name">Curricumum Downloads</span>
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
                    <h1 class="titlepg">Curricumum Downloads</h1>
                            <div class="contentpg">
                                <p>Below is the fee schedule for the SAIGON STAR International School . Download full Curricumum <a href="<?php echo url('saigonstar/File/FEE_SCHEDULE.pdf')?>
                ">Here</a></p>
                                <h2 data-fontsize="18" data-lineheight="27"><span style="color: #ff6600;"><strong><img src="{{asset('File/FEE_SCHEDULE.pdf')}} " alt="" width="100%" height="auto"></strong></span></h2>
                                <h2 data-fontsize="18" data-lineheight="27">&nbsp;<img src="{{asset('File/FEE_SCHEDULE.pdf')}}" alt="" width="100%" height="auto"></h2>
                            </div>

            </div>
     </div>
</div>
<div class="clr"></div>

@endsection