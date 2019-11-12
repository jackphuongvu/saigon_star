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
                                <a href="welcome-to-saigonstar.html" property="item" typeof="WebPage">
                                    <span property="name">Welcome to Sai Gon star</span>
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

<div class="full left subpage_info">
	<div class="w_1280">
		<div class="subpage_info_w">
			<div class="subpage_menu">
				<nav class="navbar navbar-default">
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					     <ul class="nav navbar-nav">
							<li class=""><a href="welcome-to-saigonstar.html">A Welcome from the Head of School</a></li>		
			    			<li class=""><a href="#">Mission and Values</a>	</li>		
			    			<li class=""><a href="#">Our History</a></li>		
			    			<li class=""><a href="#">Why SGS</a></li>
			    			<li class=""><a href="#">Privacy Policy</a></li>						
			    			<li>
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Meet Our Team<span class="caret-right"></span></a>
			   		          <ul class="dropdown-menu">
			    					<li class=""><a href="#">Student Council</a></li>		
			    					<li class="active"><a href="leadership-team.html">Faculty</a></li>		
			    					<li class=""><a href="#">Leadership Team</a></li>		
				    										            
					          </ul>
					        </li>
						</ul>				

					</div>
				</nav>

				<div class="mobile-subnav">
					<div class="styled-select">
						<select class="subpage_menu" onchange="redirect_url(this.value);">
							<option  value="#">A Welcome from the Head of School</option>
							<option  value="#">Mission and Values</option>
							<option  value="#">Accreditation</option>
							<option  value="#">Why SGS</option>
							<option  value="#">Privacy Policy</option>
							<optgroup label="Meet Our Team">
								<option  value="#">Students</option>
								<option selected="selected" value="#">Our Teacher</option>
								<option  value="#">Leadership Team</option>
							</optgroup>						
						</select>						
					</div>
				</div>
			</div>

			<div class="subpage_des">
				<h2>About Us</h2>
				<p>Welcome to the Saigon star International School, ....</p>
			</div>

		</div>	
	</div>
</div>		

<div class="clr"></div>

<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>


<div class="clr"></div>
<div class="full left subpage_content pgacademic page_detail">
	<div class="w_1280">
		<div class="page_detail_in">
				<h1>A Welcome from the Head of School										
				</h1>
            <p><span style="color: #000000;">
                <img style="float: left; margin: 0px 20px 0px 0px;"  src="{{asset('images/teacher/james.jpg')}}" width="200" height="300" class="img-responsive"> Mr.JAMES please help me write something.</span>
            </p>    
            <p><span style="color: #000000;">Our core belief at Saigon Star is that education should help children to develop a balance of academic achievement and personal qualities, that will support them as life-long learners and enable them to contribute in meaningful ways to our rapidly-changing, global society.</span></p>
            <p><span style="color: #000000;">As one of the most family-friendly international schools in Ho Chi Minh City Vietnam, we understand that for parents, the single most important factor when choosing a school is the school's shared vision. Above all else, it is the most influential factor in determining the type of person a child will become. To be truly effective, a shared vision is one that is shared not only among teachers, but among parents and learners, so that we are all working towards the same goal. Here's ours:;</span></p>
            <p><span style="color: #ff6600;">James Quantrill</span><br> <span style="color: #333300;">Head of School</span></p>				
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

