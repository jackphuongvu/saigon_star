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
                                    <span property="name">School Transport</span>
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

					<div class="box_3_title"><h1>School Transport</h1></div>

					<div class="clr"></div>

					<div class="box_3_des"><p><img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset('images/Screen-Shot-2017-09-08-at-12.47.44.png')}}" width="700" height="467"></p>
							<p>Saigon Star has a fleet of twelve minibuses which are used to collect and drop off children in most areas of the city. Currently, we operate a bus service for families in District 1, 2, 3, 4, 7, 9, Thu Duc, Binh Thanh, Phu Nhuan & Go Vap.

							Application for the bus service should be made at the time of registration or before the beginning of the school year. However, if space is available, families may apply for this service during the school year. Bus routes are designed to minimise the amount of time the children spend on the bus. Therefore, door to door service is not always possible.

							Students are supervised by a teacher or teaching assistant at all times and will only be handed over to a pre-designated adult.</p>
					</div>
					<div class="Transport">
							<div class="box_3_title"><h1>Transport Cost:</h1></div>	
							<span style="text-align: center;">2,730,000VND/month for District 2</span><br/>
							<span style="text-align: center;">3,300,000VND/month for all other Districts</span>
					</div>
				</div>

			</div>
		</div>



	</div>
</div>
@endsection
