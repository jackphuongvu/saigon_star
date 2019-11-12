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
                                <a href="<?php echo url('/aboutus/student')?>" property="item" typeof="WebPage">
                                    <span property="name">Student</span>
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
<div class="full left subpage_content greybg leadershippg">
			<div class="w_1280">
				<div class="subpage_content_in">
					<div class="subcontent">
						<div class="box_3_title"><h1 class="titGroup text-center">Student Council</h1></div>
						<div class="clr"></div>
						<div class="box_3_des">
								<p><span style="font-weight: 400;">The Student Council is active in bringing ideas and suggestions to the school's leadership for consideration, and in so doing, they are increasingly helping to shape school direction and strategic planning. they are taking a role in shaping school direction and strategic planning.&nbsp; &nbsp;</span></p>
								<p><span style="font-weight: 400;">One of the crucial elements of an International Baccalaureate education is the need to provide students with real-world and authentic issues and problems to address. The Student Council offers our young ambassadors a chance to deal with real problems to find genuine solutions. It is always a pleasure to see how the critical thinking skills they have learned in the classroom can be translated into solving school-related issues. &nbsp;</span></p>
								<p><span style="font-weight: 400;"> Our Student Council has had significant input into our school Vision Narrative, has promoted healthy food options in the canteen, and led countless events.</span></p>
												
						</div>
						<div class="clr"></div>
					</div>
				</div>
			</div>
</div>

@endsection