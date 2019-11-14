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
                                    <span property="name">Primary</span>
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
                                <img src="{{asset('images/begaiA.jpg')}}" alt="Early years at sai gon star HCMC"> 
                        </div>
                    </div>

                    <div class="cbi_scrollbar content_left">
                    <h1>International Primary Curriculum</h1>
                    <span>For students aged 5-11, Saigon Star delivers the International Primary Curriculum. The school adopted this curriculum in 2013 and became the first IPC-accredited school in Vietnam in July 2018..</span>
                    <h1>Learning Goals</h1>
                    <span>The learning goals are the foundation on which the International Primary Curriculum is built. The IPC provides children with subject goals, personal learning goals, and uniquely, international learning goals, and these are defined for each age phase:.</span>
                    <h1>Subject Goals</h1>
                    <span>Subject goals cover the knowledge, skills and understanding of children relating to the subjects they are learning. There are subject learning goals for Language Arts, Mathematics, Science, ICT & Computing, Technology, History, Geography, Music, Physical Education, Art and Society.</span>
                    <h1>Personal Goals</h1>
                    <span>Personal goals underpin the individual qualities and dispositions we believe children will find essential in the 21st century. There are 8 IPC Personal Goals - enquiry, resilience, morality, communication, thoughtfulness, cooperation, respect and adaptability. Opportunities to experience and practice these are built into the learning tasks within each unit of work.</span>
                    <h1>International Learning Goals</h1>
                    <span>International learning goals are unique to our curriculum and help young children begin the move towards an increasingly sophisticated national, international and intercultural perspective. Each thematic IPC unit includes an international aspect, to help develop a sense of ‘international mindedness’.</span>
                    <h1>Units of Learning</h1>
                    <span>We know that children learn best when they want to learn. That's why IPC has over 130 different thematic units of learning, designed to appeal to children’s interests and help them to learn more about the world around them.

    Themes include: Who Am I?, The Magic Toymaker, Buildings, Chocolate, Active Planet, Young Entrepreneurs, Mission to Mars,and What Price Progress.

    Themed units help children to see how subjects are both independent and interdependent. This enables them to see the big picture of their learning, make connections across different subjects, and talk about a topic from multiple perspectives.</span>
				
				<div class="clr"></div>

					<p style="text-align: justify;">Our programme also provides a wide range of opportunities for children to develop their communicative and cooperative skills as well as promoting other essential skills and encompassing literacy, mathematics, understanding the world and expressive arts.</p>
					<p><img src="images/fun03.jpg" alt="sai gon star" width="auto" height="auto"></p>
					<p style="text-align: justify;">For more information on the International Baccalaureate visit <a href="http://www.ibo.org">www.ibo.org</a>.</p>
					<figure style="text-align: center; font-size: 11px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset('images/hinhnen.jpg')}}" width="640" height="426">
					<figcaption><em>Our educators view learning as a natural part of childhood</em></figcaption>
					<figcaption></figcaption>
					</figure>
					<figure style="text-align: center; font-size: 11px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{asset('images/hinhnen3.jpg')}}" alt="Early Years at EIS HCMC" width="640" height="480">
					<figcaption><em>Communication and play provide the foundation for children’s learning</em></figcaption>
					<figcaption></figcaption>
					</figure>
					<figure style="text-align: center; font-size: 11px;"><img style="display: block; margin-left: auto; margin-right: auto;" src="{{('images/Miquel-Gazquez1.jpeg')}}" alt="Early Years at EIS HCMC" width="640" height="auto">
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

                            <img src="{{asset('images/betraiA.jpg')}}" class="image" alt="EIS Languages"> 
                            
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

                            <img src="{{asset('images/betraiA.jpg')}}" class="image" alt="EIS Arts and Music "> 
                            
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

                                <img src="{{asset('images/betraiA.jpg')}}" class="image" alt="EIS Swimming"> 
                                
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
                            <img src="{{asset('images/betraiA.jpg')}}" class="image" alt="EIS After School Activities"> 
                            
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
                        <img src="{{asset('images/betraiA.jpg')}}" />
                            <p><p style="text-align: justify;">Learn about the workings of archery, emulate your archer type hero and play various games as you discern fact and fiction</p>
                            <p style="text-align: justify;"><strong>Program by Be Activities:</strong></p>
                            <p style="text-align: justify;">Monday &amp; Friday at 15:00 &ndash; 16:00</p>
                            <p style="text-align: justify;">Age Group: 9&ndash; 11 years old (Grade 4 &ndash; Grade 5)</p></p>
	       		      </div>		       				       
		    	    <div class="col-md-4">
                            <img src="{{asset('images/betraiA.jpg')}}" />
                            <p><p style="text-align: justify;">With the use of LEGO building blocks, students apply the principles Science, Technology, Mechanical Engineering and Maths (STEM) and develop their abilities for independent learning and improve their building skills.</p>
                                <p style="text-align: justify;"><strong>Program by Young Engineers:</strong></p>
                                <p style="text-align: justify;">Monday &amp; Friday at 15:00 &ndash; 16:00</p>
                                <p style="text-align: justify;">Age Group: 6 &ndash; 7 years old (Grade 1 &ndash; Grade 2)</p>
                                <p style="text-align: justify;">&nbsp;</p></p>
	       		    </div>		       				       
		    	    <div class="col-md-4">
                                <img src="{{asset('images/betraiA.jpg')}}" />
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