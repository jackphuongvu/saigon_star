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
						  	<a property="item" typeof="WebPage" href="http://www.sgstar.edu.vn/">
						  		<span property="name">Home Page</span>
						  	</a>
						  	<meta property="position" content="1">
					  	</span>
					  </li>
					  <li class="active">
					  	<span property="itemListElement" typeof="ListItem">
					  		<a href="http://www.sgstar.edu.vn/about/team/eis-teachers-faculty/" property="item" typeof="WebPage">
					  			<span property="name">Galleries</span>
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
<div class="clr"></div>
<div class="full left subpage_info section_ourgallery">
	<div class="w_1280">
		<div class="full left text-center">
			<h1 class="head_title_gallery">SCHOOL GALLERY</h1>
			<p class="content_gallery">
				Saigon star International School  offers a rich and diverse programme of After School Activities (ASAs) for all students from Early Years to Grade 8. Students are given space and time to develop their artistic talents, social competencies, physical endurance and skills, as well as having fun in a supervised and supportive environment.			</p>
		</div>
	</div>

	<div class="section_list_album full left">
							<div class="list_album">
								<div class="col-md-3">
										<div class="show_hover">
											<div class="cover">
												<div class="in">
													<p class="title">Library</p>
													<a data-caption="" class="fancybox icon_g_cate" data-fancybox="group_30" rel="group_img_30" href="{{asset('images/hocsinh3.jpg')}}"></a>
												</div>
											</div>
										</div>
                                        <div style="overflow: hidden;max-height: 248px;">
                                            <img src="{{asset('images/hinhnen3.jpg')}}" style="width: 100%;">
                                        </div>
										<p class="title" style="color: #f5720c;font-size: 18px;text-align: center;padding-top: 10px;">Library</p>
								</div>
								<div class="img_group" style="display:none;">
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption="">
										<img src="{{asset('images/hocsinh3.jpg')}}"  class="img_view" />
									</a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
								</div>
								<div class="col-md-3">
										<div class="show_hover">
											<div class="cover">
												<div class="in">
													<p class="title">Sports</p>
													<a data-caption="" class="fancybox icon_g_cate" data-fancybox="group_31" rel="group_img_31" href="images/hocsinh3.jpg"></a>
												</div>
											</div>
										</div>
										<div style="overflow: hidden;max-height: 248px;"><img src="{{asset('images/hinhnen3.jpg')}}" style="width: 100%;"></div>
										<p class="title" style="color: #f5720c;font-size: 18px;text-align: center;padding-top: 10px;">Sports</p>
								</div>
								<div class="img_group" style="display:none;">
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption="">
										<img src="{{asset('images/hocsinh3.jpg')}}"  class="img_view" />
									</a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
								</div>
							
								<div class="col-md-3">
									<div class="show_hover">
										<div class="cover">
											<div class="in">
												<p class="title">Performing Arts</p>
												<a data-caption="" class="fancybox icon_g_cate" data-fancybox="group_43" rel="group_img_43" href="{{asset('images/hinhnen3.jpg')}}"></a>
											</div>
										</div>
									</div>
									<div style="overflow: hidden;max-height: 248px;"><img src="{{asset('images/hocsinh3.jpg')}}" style="width: 100%;"></div>
									<p class="title" style="color: #f5720c;font-size: 18px;text-align: center;padding-top: 10px;">Performing Arts</p>
								</div>
								<div class="img_group" style="display:none;">
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption="">
										<img src="#"  class="img_view" />
									</a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
								</div>
								<div class="col-md-3">
									<div class="show_hover">
										<div class="cover">
											<div class="in">
												<p class="title">Arts, Design and Music</p>
												<a data-caption="" class="fancybox icon_g_cate" data-fancybox="group_44" rel="group_img_44" href="#"></a>
											</div>
										</div>
									</div>
									<div style="overflow: hidden;max-height: 248px;"><img src="{{asset('images/hinhnen3.jpg')}}" style="width: 100%;"></div>
									<p class="title" style="color: #f5720c;font-size: 18px;text-align: center;padding-top: 10px;">Arts, Design and Music</p>
								</div>
								<div class="img_group" style="display:none;">
										<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption="">
											<img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" />
										</a>
										<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
										<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
										<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
										<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
								</div>
								<div class="col-md-3">
									<div class="show_hover">
										<div class="cover">
											<div class="in">
												<p class="title">After School Activities</p>
												<a data-caption="" class="fancybox icon_g_cate" data-fancybox="group_45" rel="group_img_45" href="images/hocsinh3.jpg"></a>
											</div>
										</div>
									</div>
									<div style="overflow: hidden;max-height: 248px;"><img src="{{asset('images/hocsinh3.jpg')}}" style="width: 100%;"></div>
									<p class="title" style="color: #f5720c;font-size: 18px;text-align: center;padding-top: 10px;">After School Activities</p>
								</div>
								<div class="img_group" style="display:none;">
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption="">
										<img src="{{asset('images/hocsinh1.jpg')}}"  class="img_view" />
									</a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
								</div>
								<div class="col-md-3">
								<div class="show_hover">
									<div class="cover">
										<div class="in">
											<p class="title">Week Without Walls</p>
											<a data-caption="" class="fancybox icon_g_cate" data-fancybox="group_46" rel="group_img_46" href="#"></a>
										</div>
									</div>
								</div>
								<div style="overflow: hidden;max-height: 248px;"><img src="{{asset('images/hinhnen3.jpg')}}" style="width: 100%;"></div>
								<p class="title" style="color: #f5720c;font-size: 18px;text-align: center;padding-top: 10px;">Week Without Walls</p>
								</div>
								<div class="img_group" style="display:none;">
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption="">
										<img src="{{asset('images/hocsinh1.jpg')}}"  class="img_view" />
									</a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
								</div>
								<div class="col-md-3">
									<div class="show_hover">
										<div class="cover">
											<div class="in">
												<p class="title">Welcome Back to School 2019 -2020</p>
												<a data-caption="" class="fancybox icon_g_cate" data-fancybox="group_60" rel="group_img_60" href="#"></a>
											</div>
										</div>
									</div>
									<div style="overflow: hidden;max-height: 248px;"><img src="{{asset('images/hocsinh1.jpg')}}" style="width: 100%;"></div>
									<p class="title" style="color: #f5720c;font-size: 18px;text-align: center;padding-top: 10px;">Welcome Back to School 2019 -2020</p>
								</div>
								<div class="img_group" style="display:none;">
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption="">
										<img src="{{asset('images/hocsinh1.jpg')}}"  class="img_view" />
									</a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
								</div>
								<div class="col-md-3">
									<div class="show_hover">
										<div class="cover">
											<div class="in">
												<p class="title">National Day</p>
												<a data-caption="" class="fancybox icon_g_cate" data-fancybox="group_61" rel="group_img_61" href="#"></a>
											</div>
										</div>
									</div>
									<div style="overflow: hidden;max-height: 248px;"><img src="{{asset('images/hocsinh1.jpg')}}" style="width: 100%;"></div>
									<p class="title" style="color: #f5720c;font-size: 18px;text-align: center;padding-top: 10px;">National Day</p>
									</div>
								<div class="img_group" style="display:none;">
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption="">
										<img src="#"  class="img_view" />
									</a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen3.jpg')}}"  class="img_view" /></a>
								</div>
							</div>
							<div class="list_album">
								<div class="col-md-3">
									<div class="show_hover">
										<div class="cover">
											<div class="in">
												<p class="title">Swimming programme</p>
												<a data-caption="" class="fancybox icon_g_cate" data-fancybox="group_17" rel="group_img_17" href="#"></a>
											</div>
										</div>
									</div>
									<div style="overflow: hidden;max-height: 248px;"><img src="{{asset('images/hinhnen3.jpg')}}" style="width: 100%;"></div>
									<p class="title" style="color: #f5720c;font-size: 18px;text-align: center;padding-top: 10px;">Swimming programme</p>
								<div class="img_group" style="display:none;">
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption="">
										<img src="{{asset('images/hocsinh1.jpg')}}"  class="img_view" />
									</a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen1.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen1.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen1.jpg')}}"  class="img_view" /></a>
									<a class="fancybox" data-fancybox="group_30" rel="group_img_30" href="#" data-caption=""><img src="{{asset('images/hinhnen1.jpg')}}"  class="img_view" /></a>
								</div>
							</div>
							
							<div class="list_album"></div></div>
	
	<div class="w_1280 text-center">
		<p class="text-uppercase hidden click_view">view more ...</p>
	</div>
</div>

<script type="text/javascript">
	$('.fancybox').fancybox({
	  margin : [44,0,22,0],
	  thumbs : {
	    autoStart : true,
	    axis      : 'x'
	  }
	});

	$('.ul_categl_choose li').click(function(){
		var id = $(this).attr('data-id');
		$('.list_album:not('+id+')').fadeOut(500).removeClass('active');
		if($('.list_album_'+id).hasClass('more')){
			$('.click_view').removeClass('hidden');
		}else{
			$('.click_view').addClass('hidden');
		}
		$('.list_album_'+id).fadeIn(1000).addClass('active');
		$('.ul_categl_choose li:not('+id+')').removeClass('active');
		$('.ul_categl_choose li.'+id).addClass('active');
	});
	$('.click_view').click(function(){
		$('.list_album.active .col-md-3').removeClass('hidden');
		$('.list_album.active').removeClass('more');
		$('.click_view').addClass('hidden');
	});

</script>


<script>

    function extendReadMore(id_element, id_link, id_elementfull){

    	console.log(id_element);

        $('#' + id_element).attr('current','extend');

        $('#' + id_element).hide();

    	console.log(id_link);

        $('#' + id_link).remove();

        $('#' + id_elementfull).show();

    	console.log(id_elementfull);

    }

</script>


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

@endsection