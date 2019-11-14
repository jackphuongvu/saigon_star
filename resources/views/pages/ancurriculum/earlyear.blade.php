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
                                <a property="item" typeof="WebPage" href="{{URL::to('/')}}">
                                    <span property="name">Home Page</span>
                                </a>
                                <meta property="position" content="1">
                            </span>
                        </li>
                        <li class="active">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="<?php echo url('/ancurriculum/earlyear')?>" property="item" typeof="WebPage">
                                    <span property="name">Early Years</span>
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

<div class="full left subpage_content pgacademic">
	<div class="w_1280">
				<div class="subpage_content_in">
			<div class="content_img_w">
			<div class="content_img">
					<img src="{{asset('images/betraimamnon.jpg')}}" alt="Early years at HCMC"> 
			</div>
			</div>

			<div class="cbi_scrollbar content_left">
				<h1>International Early Years Curriculum</h1>
				<span>For students aged 2-5, we follow the International Early Years Curriculum, enhanced by daily Montessori classes.</span>
				<h1>Learning Principles</h1>
				
				<div class="clr"></div>

				<p style="text-align: justify;">
					The IEYC is designed around eight learning principles, that we consider essential to children’s learning and development.

					The earliest years of life are important in their own right.
					Children should be supported to learn and develop at their own unique pace.
					Play is an essential aspect of all children’s learning and development.
					Learning happens when developmentally-appropriate, teacher-scaffolded and child initiated experiences harness children’s natural curiosity in an enabling environment.
					Independent and interdependent learning experiences create a context for personal development and are the foundation of international mindedness.
					Knowledge and skills development lead to an increasing sense of understanding when children are provided with opportunities to explore and express their ideas in multiple ways.
					Ongoing assessment, in the form of evaluation and reflection, is effective when it involves a learning-link with the home.
					Learning should be motivating, engaging and fun, opening up a world of wonder for children where personal interests can flourish.</p>

					<p style="text-align: justify;">Our programme also provides a wide range of opportunities for children to develop their communicative and cooperative skills as well as promoting other essential skills and encompassing literacy, mathematics, understanding the world and expressive arts.</p>
					<p><img src="{{asset('images/fun03.jpg')}}" alt="sai gon star" width="auto" height="auto"></p>
					<p style="text-align: justify;">For more information on the International Baccalaureate visit <a href="http://www.ibo.org">www.ibo.org</a>.</p>
					<figure style="text-align: center; font-size: 11px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset('images/hinhnen.jpg')}}" width="640" height="426">
					<figcaption><em>Our educators view learning as a natural part of childhood</em></figcaption>
					<figcaption></figcaption>
					</figure>
					<figure style="text-align: center; font-size: 11px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset('images/hinhnen3.jpg')}}" alt="Early Years at EIS HCMC" width="640" height="480">
					<figcaption><em>Communication and play provide the foundation for children’s learning</em></figcaption>
					<figcaption></figcaption>
					</figure>
					<figure style="text-align: center; font-size: 11px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset('images/Miquel-Gazquez1.jpeg')}}" alt="Early Years at EIS HCMC" width="640" height="auto">
					<figcaption><em>Play provides children with opportunities to explore, discover, create and experiment</em></figcaption>
					<figcaption></figcaption>
					</figure>
					<p style="text-align: justify;"><span style="font-weight: 400;"><iframe src="//www.youtube.com/watch?v=F5USmxGn1pg" width="100%" height="300" allowfullscreen="allowfullscreen"></iframe></span></p>

				</div>
			</div>
				</div>
</div>
<div class="clr"></div>

<div class="text_add"><h2>A True Second Home</h2></div>

<div class="full left">
<div class="flower-section">	
	<div class="w_1280">
		<div class="cover">
            <div class="col-md-3">
				<div class="content">
					<div class="incover">
						<p class="number">1-2</p>
                        <br>daily outdoor play times					
                    </div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="content">
					<div class="incover">
						<p class="number">1,500+</p>
                        <br>minutes of music per year					
                    </div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="content">
					<div class="incover">
						<p class="number">6,240+</p>
                        <br>minutes of second language per year					
                    </div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="content">
					<div class="incover">
						<p class="number">100% </p>
                        <br>Early Years students participate in swimming programme					
                    </div>
				</div>
			</div>
							
		</div>
	</div>
<div class="clr"></div>
<div class="full left whatweoffer pgacademic">
	
<div class="box_2_title"><h2>What We Offer</h2></div>

	<div class="whatweoffer_list">
  				<div class="whatweoffer_item">
				<div class="container">
					<a href="#">

						<img src="{{asset('images/betraimamnon.jpg')}}" class="image" alt="EIS Languages"> 
						
						<div class="overlay">
						<div style="text-transform: capitalize;" class="text">Languages</div>
						</div>
					</a>
					<div style="text-transform: capitalize; " class="text text1">Languages</div>
				</div>
			</div>
						<div class="whatweoffer_item">
				<div class="container">
					<a href="#">

						<img src="{{asset('images/betraimamnon.jpg')}}" class="image" alt="EIS Arts and Music "> 
						
						<div class="overlay">
						<div style="text-transform: capitalize;" class="text">Arts and Music </div>
						</div>
					</a>
					<div style="text-transform: capitalize; " class="text text1">Arts and Music </div>
				</div>
			</div>
						<div class="whatweoffer_item">
				<div class="container">
					<a href="#">

						<img src="{{asset('images/betraimamnon.jpg')}}" class="image" alt="EIS Swimming"> 
						
						<div class="overlay">
						<div style="text-transform: capitalize;" class="text">Swimming</div>
						</div>
					</a>
					<div style="text-transform: capitalize; " class="text text1">Swimming</div>
				</div>
			</div>
						<div class="whatweoffer_item">
				<div class="container">
					<a href="#">

						<img src="{{asset('images/betraimamnon.jpg')}}" class="image" alt="EIS After School Activities"> 
						
						<div class="overlay">
						<div style="text-transform: capitalize;" class="text">After School Activities</div>
						</div>
					</a>
					<div style="text-transform: capitalize; " class="text text1">After School Activities</div>
				</div>
			</div>
					
	</div>
	
	<div class="clr"></div>

	<div class="w_1280 inquire_w">
		<span class="inquire_btn"><a href="#" class="download bt_inquire text-uppercase" style="float: none;">inquire more information</a></span>
	</div>

</div>

<div class="clr"></div>

<div class="full left extra_activities">
	<div class="w_1280">
                <p class="ptitle_extra_activities full left text-center text-uppercase">Extra Activities</p>
                <div class="full left box_activity">
                        <div class="col-md-4">
                            <img src="{{asset('images/betraimamnon.jpg')}}"/>
                                <p><p style="text-align: justify;">Learn about the workings of archery, emulate your archer type hero and play various games as you discern fact and fiction</p>
                                <p style="text-align: justify;"><strong>Program by Be Activities:</strong></p>
                                <p style="text-align: justify;">Monday &amp; Friday at 15:00 &ndash; 16:00</p>
                                <p style="text-align: justify;">Age Group: 9&ndash; 11 years old (Grade 4 &ndash; Grade 5)</p></p>
                            </div>		       				       
                                <div class="col-md-4">
                                <img src="{{asset('images/betraimamnon.jpg')}}" />
                                <p><p style="text-align: justify;">With the use of LEGO building blocks, students apply the principles Science, Technology, Mechanical Engineering and Maths (STEM) and develop their abilities for independent learning and improve their building skills.</p>
                                    <p style="text-align: justify;"><strong>Program by Young Engineers:</strong></p>
                                    <p style="text-align: justify;">Monday &amp; Friday at 15:00 &ndash; 16:00</p>
                                    <p style="text-align: justify;">Age Group: 6 &ndash; 7 years old (Grade 1 &ndash; Grade 2)</p>
                                    <p style="text-align: justify;">&nbsp;</p></p>
                            </div>		       				       
                            <div class="col-md-4">
                                <img src="{{asset('images/betraimamnon.jpg')}}" />
                                <p><p style="text-align: justify;"><strong>ISTD COMMERCIAL HIPHOP</strong></p>
                            <p style="text-align: justify;">The Street Dance Syllabus fulfils the needs of an ever increasing dance community - fusion of music and dance. ISTD curriculum offers styles such as breakdance, locking, popping and groove.</p>
                            <p style="text-align: justify;"><strong>ISTD MODERN JAZZ</strong></p>
                            <p style="text-align: justify;">Influenced by Jazz music and Broadway, the Modern Jazz dance programme will facilitate correct Modern Jazz technique, the execution of movement and performance skills. It will encourage students to develop a sense of rhythmic awareness essential to Modern Jazz dance. All students will learn the international curriculum based on ISTD method, taught by ISTD certified dance teachers.</p>
                            <p style="text-align: justify;"><strong>Program by Arts Nation:</strong></p>
                            <p style="text-align: justify;">MONDAY at 15:00 - 16:00 : COMMERCIAL HIPHOP</p>
                            <p style="text-align: justify;">FRIDAY at 15:00 - 16:00 : MODERN JAZZ</p>
                            <p style="text-align: justify;">- Age group: 6 - 11 years old (Grade 1 to Grade 5)</p>
                            <p style="text-align: justify;">- Level: Pre-Primary</p>
                            <p style="text-align: justify;">- Curriculum: ISTD (The Imperial Society of Teachers of Dancing)</p>
                            <p style="text-align: justify;">&nbsp;</p></p>
                        </div>		       				       
                                
                </div>
     </div>
</div>	

@endsection