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
				  			<span property="name">news-and-social-media</span>
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
			<div>
			    <h1 class="titlepg">Fees &amp; Tuition</h1>

                        <div class="contentpg">
                            <p>Below is the fee schedule for the SAIGON STAR International School . Download full version <a href="<?php echo url('saigonstar/File/FEE_SCHEDULE.pdf')?>
            ">Here</a></p>
                            <h2 data-fontsize="18" data-lineheight="27"><span style="color: #ff6600;"><strong><img src="{{asset('File/FEE_SCHEDULE.pdf')}} " alt="" width="100%" height="auto"></strong></span></h2>
                            <h2 data-fontsize="18" data-lineheight="27">&nbsp;<img src="{{asset('File/FEE_SCHEDULE.pdf')}}" alt="" width="100%" height="auto"></h2>
                        </div>

		    </div>

                <div class="banner_school_ad_top">

                    <div class="banner_school_ad_top_1">

                        <p>Connect With Admissions Team</p>

                    </div>

                    

                    <div class="banner_school_ad_top_2 full left">

                        
                                <div class="cover_content">

                                    <p class="name">Ms.Thu Thanh</p>

                                    <p>

                                        Admissions Manager<br>

                                        Email: <a href="mailto:thanhma@sgstar.edu.vn">thanhma@sgstar.edu.vn </a><br>Cell phone: <a href="tel:(+84) 8 8800 6996 ">(+84) 8 8800 6996 </a><br>								

                                    </p>

                                    <p><span style="font-weight: 400;">Languages: Vietnamese and English </span></p>
                                    

                                </div>

                                
                                <hr class="hr_banner_school_ad_top_2">	

                                
                                
                                <div class="cover_content">

                                    <p class="name">Ms. SaiGon star</p>

                                    <p>

                                        Admissions Executive<br>

                                        Email: <a href="mailto:saigonstar@sgstar@edu.vn">saigonstar@sgstar@edu.vn</a><br>Cell phone: <a href="tel:(+84) 8 8800 6996 ">(+84) 8 8800 6996 </a><br>								

                                    </p>

                                    <p><span style="font-weight: 400;">Languages: Korean, English and Japanese</span></p>
                                    

                                </div>

                                
                                <hr class="hr_banner_school_ad_top_2">	

                                
                                
                                <div class="cover_content">

                                    <p class="name">saigon star</p>

                                    <p>

                                        Admissions Executive<br>

                                        Email: <a href="mailto:saigonnstar@sgstar.edu.vn ">saigonnstar@sgstar.edu.vn </a><br>Cell phone: <a href="tel:(+84) 8 8800 6996">(+84) 8 8800 6996</a><br>								

                                    </p>
                                    <p>Languages: Vietnamese, German and English</p>
                                </div>
			            </div>
                    </div>
		    </div>
</div>
<div class="clr"></div>

@endsection