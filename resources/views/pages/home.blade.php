@extends('layouts.master')
@section('content')
{{--<link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">--}}
{{--<script type="text/javascript" src="{{asset('js/jquery.fancybox.min.js')}}"></script>--}}

<div class="clr"></div>
<div class="full left bg_home_box_1 bg_home_box_1_n">
	<div class="w_1280 bg_home_box_1_in">
		<div class="box_1_item first">
			<div class="hvr-bob top"><a href="school-galleries.html"><img src="images/home_icon_1.png"></a></div>
			<div class="title"><a href="school-galleries.html" class="">Gallery</a></div>
		</div>

		<div class="box_1_item">
				<div class="hvr-bob top"><a class="various fancybox.iframe" href="https://www.youtube.com/watch?v=piu5uAcqI7U">
					<img src="images/home_icon_2.png"></a>
				</div>
				<div class="title"><a class="various fancybox.iframe" href="https://www.youtube.com/watch?v=piu5uAcqI7U">OUR VIDEO</a>
				</div>
		</div>
		<div class="box_1_item">
			<div class="hvr-bob top"><a href="contact-us.html"><img src="images/home_icon_3.png"></a></div>
			<div class="title"><a href="contact-us.html" class="">Contact Us</a></div>
		</div>

		<div class="box_1_item last">
			<div class="hvr-bob top"><a href="booktour.html"><img src="images/home_icon_4.png"></a></div>
			<div class="title"><a href="booktour.html" class="">SCHOOL TOUR</a></div>
		</div>

	</div>
</div>

<div class="clr"></div>
<div class="full left bg_home_box_2">
	<div class="w_1280">

		<div class="box_2_title"><h1>About Us</h1></div>
		<p class="box_2_des" align="center">
			At the SAIGON STAR International School, learning and personal growth<br>continue long after the day’s lessons have ended. We aim to provide our students with<br>opportunities to develop their natural talents, build confidence, practice a healthy lifestyle<br>and expand their world view.
		</p>

	</div>
</div>

<div class="clr"></div>
<div class="box_3_wrap_all">
		<div class="full left box_3_wrap">
			<div class="box_3 bg_b39f8f w_22">
				<div class="content">
					<img class="lazyOwl" src="img/English_National.png" alt="English National Curriculum">
				</div>
			</div>
			<div class="box_3 bg_d6a076 w_20 bor_l">
				<div class="content">
					<img class="lazyOwl" src="img/Family_Community.png" alt="English National Curriculum">
				</div>
			</div>
			<div class="box_3 bg_f5720c w_33 bor_l">
				<div class="content">
								<img class="lazyOwl" src="img/28_Nationalities.png" alt="English National Curriculum">
				</div>
			</div>
			<div class="box_3 bg_a16f48 w_25 bor_l">
				<div class="content">
					<img class="lazyOwl" src="img/IPC_Accredited_School.png" alt="English National Curriculum">
				</div>
			</div>
		</div>

</div>
<div class="clr"></div>
<div class="full left banner_school_n " id="banner_school">
	<div id="school_Carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <img src="img/9corevalues.jpg" alt="Nature" class="responsive" width="1920" height="400">
    </div>
</div>

<style type="text/css">
b {font-size: 16px;}
</style>

<div class="box_3_mobile">
   <div class="box_3 bg_b39f8f w_22">
		<div class="content">
			<img class="lazyOwl" src="img/English_National.png" alt="English National Curriculum">
		</div>
	</div>


	<div class="box_3 bg_d6a076 w_20 bor_l">
		<div class="content">
			<img class="lazyOwl" src="img/Family_Community.png" alt="English National Curriculum">
		</div>
	</div>

   <div class="box_3 bg_f5720c w_33 bor_l">
		<div class="content">
			<img class="lazyOwl" src="img/28_Nationalities.png" alt="English National Curriculum">
		</div>
	</div>

	<div class="box_3 bg_a16f48 w_25 bor_l">
		<div class="content">
			<img class="lazyOwl" src="img/IPC_Accredited_School.png" alt="English National Curriculum">
		</div>
	</div>

   <div class="full left banner_school_n" id="banner_school">
		<div id="school_Carousel" class="carousel slide carousel-fade" data-ride="carousel">
	        <img src="img/9corevalues.jpg" alt="Nature" class="responsive" width="1920" height="400">
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

<div class="full left banner_school_n" id="banner_school">
	<div id="school_Carousel" class="carousel slide carousel-fade" data-ride="carousel">
         	<div class="carousel-inner">
        	      	<div class="item">
		                <img src="images/banner/Monday_assembly.jpg" class="img-responsive">
		            </div>
			        <div class="item active">
				         <img src="images/banner/Mid_Autumn_Festival_01.jpg" class="img-responsive">
				   </div>
   			 </div>
	</div>
    <div class="banner_school_content">
		<div class="banner_school_content_top">
			<h2 class="title">School Life</h2>
			<ul class="list_link">
				<li><a href="after-school-activities.html">Extra Activities</a></li>
				<li><a href="week-without-walls.html">Week without Wall</a></li>
				<li><a href="school-galleries.html">Gallery</a></li>
			</ul>
		</div>
		<div class="banner_school_content_bottom">
			<p>
				Our core belief at Saigon star is that education should help children to develop a balance of academic achievement and personal qualities, that will support them  as life-long learners and enable them to contribute in meaningful ways to our rapidly-changing ,global society.
			</p>
		</div>
	</div>

</div>
<div class="clr"></div>
<div class="text_glance"><h2>AT A GLANCE</h2></div>

<div class="full left box_class box_class_n">
	<div class="w_1280">

		<div class="b_class_l">
			<div class="b_class_item first">
				<div class="name">Early Years</div>
				<a href="#"><img src="images/fun02.jpg" class="img-responsive hvr-grow" alt="Early Years"></a>
			</div>
			<div class="b_class_item">
				<div class="name">Primary Year</div>
				<a href="#"><img src="images/fun03.jpg" class="img-responsive hvr-grow" alt="International Primary School"></a>
			</div>
			<div class="b_class_item last">
				<div class="name"> Middle Year</div>
				<a href="#"><img src="images/fun04.jpg" class="img-responsive hvr-grow" alt="International Middle"></a>
			</div>

		</div>

		<div class="b_class_r">

			<div class="cal_title">
				<h2>Calendar</h2>
				 <a href="#" class="btn btn-default right bt_viewfull">VIEW FULL</a>
			</div>
			<div class="clr"></div>
			<!-- Calendar Item -->
			<div class="cal_item">
					<div class="cal_l">
						<span class="day  small">14 - 05</span><br>
						<span class="month  small">SEP - JAN</span>
					</div>
					<div class="cal_r">
						<a class="cal_name" href="javascript:void(0);">School Holiday</a><br>
						<div class="cal_label_l">Location:</div>
						<div class="cal_label_r">SaiGon Star International School</div>
						<div class="clr"></div>
						<div class="cal_label_l">Time:</div>
						<div class="cal_label_r"><span class="c_f5720c">14 (Saturday) 00:00 - 05 (Sunday) 23:59</span>  <span class="sep small">|</span> <a href="javascript:void(0);" onclick="downloadGooglCal(&#39;event&#39;, &#39;264&#39;);" class="c_f5720c">Add to google Calendar</a></div>
					</div>
			</div>
			<div class="cal_item">
					<div class="cal_l">
						<span class="day  small">12 - 21</span><br>
						<span class="month ">OCT</span>
					</div>
					<div class="cal_r">
						<a class="cal_name" href="javascript:void(0);">School Holiday</a><br>
						<div class="cal_label_l">Location:</div>
						<div class="cal_label_r">SaiGon Star International School</div>
						<div class="clr"></div>
						<div class="cal_label_l">Time:</div>
						<div class="cal_label_r"><span class="c_f5720c">12 (Saturday) 00:00 - 21 (Monday) 23:59</span>  <span class="sep small">|</span> <a href="javascript:void(0);" onclick="downloadGooglCal(&#39;event&#39;, &#39;258&#39;);" class="c_f5720c">Add to google Calendar</a></div>
					</div>
			</div>
			<div class="cal_item">
					<div class="cal_l">
						<span class="day ">22</span><br>
						<span class="month ">OCT</span>
					</div>
					<div class="cal_r">
						<a class="cal_name" href="javascript:void(0);">Start of Term 2</a><br>
						<div class="cal_label_l">Location:</div>
						<div class="cal_label_r">SaiGon Star International School</div>
						<div class="clr"></div>
						<div class="cal_label_l">Time:</div>
						<div class="cal_label_r"><span class="c_f5720c">Tuesday (08:00 - 15:00) </span>  <span class="sep ">|</span> <a href="javascript:void(0);" onclick="downloadGooglCal(&#39;event&#39;, &#39;259&#39;);" class="c_f5720c">Add to google Calendar</a></div>
					</div>
			</div>
			<div class="cal_item">
					<div class="cal_l">
						<span class="day ">22</span><br>
						<span class="month ">OCT</span>
					</div>
					<div class="cal_r">
						<a class="cal_name" href="javascript:void(0);">GL Assessments</a><br>
						<div class="cal_label_l">Location:</div>
						<div class="cal_label_r">SaiGon Star International School</div>
						<div class="clr"></div>
						<div class="cal_label_l">Time:</div>
						<div class="cal_label_r"><span class="c_f5720c">Tuesday (08:00 - 09:15) </span>  <span class="sep ">|</span> <a href="javascript:void(0);" onclick="downloadGooglCal(&#39;event&#39;, &#39;283&#39;);" class="c_f5720c">Add to google Calendar</a></div>
					</div>
			</div>
			<div class="cal_item">
					<div class="cal_l">
						<span class="day ">24</span><br>
						<span class="month ">OCT</span>
					</div>
					<div class="cal_r">
						<a class="cal_name" href="javascript:void(0);">United Nations Assembly</a><br>
						<div class="cal_label_l">Location:</div>
						<div class="cal_label_r">SaiGon Star International School</div>
						<div class="clr"></div>
						<div class="cal_label_l">Time:</div>
						<div class="cal_label_r"><span class="c_f5720c">Thursday (08:30 - 09:30) </span>  <span class="sep ">|</span> <a href="javascript:void(0);" onclick="downloadGooglCal(&#39;event&#39;, &#39;260&#39;);" class="c_f5720c">Add to google Calendar</a></div>
					</div>
			</div>
		</div>

	</div>
</div>

<div class="clr"></div>

<div class="full left box_news">
	<div class="w_1280">
		<h2 class="box_2_title">Latest News</h2>
		<div class="clr"></div>

		<div class="news_wrap">
							<div class="news_item">
					<div class="title_header" style="height: 56px">
					<a href="#" class="title">Weekly email from SaiGon Star to Parents - 10th October 2019</a></div>
					<div class="clr"></div>
					<div class="im_footer" style="height: auto">
					<div class="hvr-float-shadow image">
						<a href="#">
							<img src="thumbnail.php" class="img-responsive" alt="Weekly email from SaiGon Star to Parents - 10th October 2019">
						</a>
					</div>
					<div class="des">
						Dear Parents and Guardians,
Meet the SLT  Thank you to those parents who attended the ...
					</div>
					</div>
				</div>
				<div class="sep"></div>								<div class="news_item">
					<div class="title_header" style="height: 56px">
					<a href="#" class="title">Weekly email from SaiGon Star to Parents - 03rd October 2019</a></div>
					<div class="clr"></div>
					<div class="im_footer" style="height: auto">
					<div class="hvr-float-shadow image">
						<a href="#">
														<img src="thumbnail(1).php" class="img-responsive" alt="Weekly email from saigon star to Parents - 03rd October 2019">
						</a>
					</div>
					<div class="des">
						Dear Parents and Guardians,
Grade 2 Thank you to students in Grade 2 for presenting ...
					</div>
					</div>
				</div>
				<div class="sep"></div>								<div class="news_item">
					<div class="title_header" style="height: 56px">
					<a href="#" class="title">Weekly email from SaiGon Star to Parents - 26th September 2019</a></div>
					<div class="clr"></div>
					<div class="im_footer" style="height: auto">
					<div class="hvr-float-shadow image">
						<a href="#">
														<img src="thumbnail(2).php" class="img-responsive" alt="Weekly email from saigon star to Parents - 26th September 2019">
						</a>
					</div>
					<div class="des">
						Dear Parents and Guardians,
Parents of Vietnamese and Korean Students Thank you to parents who ...
					</div>
					</div>
				</div>


		</div>
		<div class="clr"></div>

		<p align="center"><a href="#" class="btn btn-default bt_viewall">VIEW ALL</a></p>

	</div>
</div>
<div class="clr"></div>
<div class="text_add"><h2>Community Voices</h2></div>
<div class="full left bg_f1f1f1 our_parent">
	<div class="w_1280">

		<div id="carousel_our_parent" class="carousel slide" data-ride="carousel" data-interval="10000">
		  <!-- Indicators -->
		  <div class="carousel-inner" role="listbox">
		  	<div class="carousel-inner" role="listbox">

						<div class="item">
								       <div class="tes_left">
								       	  <div class="image">
								       	  	 <img src="images/5I7A0935.jpg" class="img-responsive" alt="Won Jae Choi (Class of 2018) review about SaiGon Star HCMC">
								       	  </div>
								       </div>
								       <div class="tes_right">

								       		<div class="cbi_scrollbar tes_content"><p>Saigon Star is a truly wonderful school. My daughter has been there for the past 7 years and is now in Year 7. On all points the school is outstanding: quality of teachers – university trained and experienced teachers who are enthusiastic and dedicated; friendly supportive atmosphere; excellent facilities, roomy classrooms, swimming pool, sports field (note real grass). Importantly the school is multi-cultural in terms of students. Fees are affordable for most families. Perhaps the best endorsement is from my daughter who has never ever said “I don’t want to go to school today!</p>
<p style="text-align: left;"><span class="TextRun SCXW245871871 BCX0" lang="KO" xml:lang="KO" data-contrast="auto"><span class="NormalTextRun SCXW245871871 BCX0">&nbsp;</span></span><span class="EOP SCXW245871871 BCX0" data-ccp-props="{">&nbsp;</span></p></div>
								       		<div class="clr"></div>
								       		<p class="tes_name"><strong style="font-style: italic;">Chris Poole-Johnson, from Australia</strong></p>
								       </div>
						</div>
						<div class="item">
								       <div class="tes_left">
								       	  <div class="image">
								       	  	 <img src="images/Khurram Family-Germany 200x200.jpg" class="img-responsive" alt="Khurram Family - From Germany review about SaiGon Star HCMC">
								       	  </div>
								       </div>
								       <div class="tes_right">

								       		<div class="cbi_scrollbar tes_content"><p>The things we really love about Saigon Star International School are the small class sizes which allows teachers and students to have more interaction and to create an environment that foster better learning. The friendly, family-like atmosphere here is something that you would not easily find in other schools around HCM city. At first, we just let our two younger children attend the school but after one year we decided to transfer our eldest daughter from another international school. We believed Saigon Star is a superior school in both learning and environment. Our three children really enjoy going to school each day, they love the activities and the people that they interacted with from the multi-cultural diversity of other students, to the knowledgeable teachers and friendly staff. We have since moved to another country but, one day, when we do move back, we are sure our children would be very excited to attend Saigon Star.&nbsp;</p></div>
								       		<div class="clr"></div>
								       		<p class="tes_name"><strong style="font-style: italic;">Doanh & Trang, from Vietnam</strong></p>
								       </div>
						</div>
						<div class="item">
								       <div class="tes_left">
								       	  <div class="image">
								       	  	 <img src="images/Kliegl.jpeg" class="img-responsive" alt="Kliegl Family – From Europe review about SaiGon Star HCMC">
								       	  </div>
								       </div>
								       <div class="tes_right">

								       		<div class="cbi_scrollbar tes_content"><p>From our first contact with the school when looking for a place for our daughter, we knew Saigon Star was the right environment for her. From the teachers to the support staff, we only have good things to say. Saigon Star is an intimate but impressive international school environment. It respects the English primary curriculum which was important to us, recognises its students as individuals and creates an environment where we saw our daughter develop both academically and sociallyFrom our first contact with the school when looking for a place for our daughter, we knew Saigon Star was the right environment for her. From the teachers to the support staff, we only have good things to say. Saigon Star is an intimate but impressive international school environment. It respects the English primary curriculum which was important to us, recognises its students as individuals and creates an environment where we saw our daughter develop both academically and socially.</p></div>
								       		<div class="clr"></div>
								       		<p class="tes_name"><strong style="font-style: italic;">Jon Garrity, from the UK</strong></p>
								       </div>
						</div>
						<div class="item">
								       <div class="tes_left">
								       	  <div class="image">
								       	  	 <img src="images/Fettke.jpeg" class="img-responsive" alt="Fettke Family – From Germany review about SaiGon Star HCMC">
								       	  </div>
								       </div>
								       <div class="tes_right">

								       		<div class="cbi_scrollbar tes_content"><p>Saigon Star is a wonderful, small, family-style school that we chose for our son, Alaric, because of small classroom sizes and the topic based curriculum. My son came from a different international school in HCMC and had fallen a bit behind in some areas due to his attendance in classrooms with over 20 students. Saigon Star worked with him and other children with similar situations and got him back on track. We are back in the United States and he is ahead now! In addition, the International Primary Curriculum at Saigon Star gave my son an open mindset, world knowledge, and exposure to other cultures which are hard to come by in the US. The topic based instruction is fantastic and my son loved focusing and learning about different topics throughout the year. I loved the easy communication tools the school uses, the friendliness of staff and teachers, and the way the different grades and classes are able to work together. We were sad to leave Saigon Star and Alaric says if we go back to Vietnam, he definitely wants to go back to Saigon Star..</p></div>
								       		<div class="clr"></div>
								       		<p class="tes_name"><strong style="font-style: italic;">Crystal Montuori, from the USA</strong></p>
								       </div>
						</div>
						<div class="item">
								       <div class="tes_left">
								       	  <div class="image">
								       	  	 <img src="images/Zalio.jpeg" class="img-responsive" alt="Zalio Family - From Czech review about SaiGon Star HCMC">
								       	  </div>
								       </div>
								       <div class="tes_right">

								       		<div class="cbi_scrollbar tes_content"><p>Bryan showed he was bright and eager to learn since an early age. At Saigon Star, his unique qualities were recognised and encouraged. Skilled teachers knew how to stretch his thinking beyond the basics of maths and science whilst ensuring he remained sociable and well-grounded. The school also offers a wide range of extra-curricular activities such as the study of a second language, arts and drama, sports and swimming. This has made Bryan not merely a gifted student but a child able to contribute to his society..</p></div>
								       		<div class="clr"></div>
								       		<p class="tes_name"><strong style="font-style: italic;">Bonny Tans, from Singapore</strong></p>
								       </div>
						</div>
						<div class="item active">
								       <div class="tes_left">
								       	  <div class="image">
								       	  	 <img src="images/Miquel-Gazquez1.jpeg" class="img-responsive" alt="Gazquez Family – From Spain review about SaiGon Star HCMC">
								       	  </div>
								       </div>
								       <div class="tes_right">

								       		<div class="cbi_scrollbar tes_content"><p>Saigon Star is unique: a small but true international school in many senses, from its world-class curriculum and teaching standards, to the diverse languages and cultures represented by its students, teachers and parents. It is also a happy family, which is welcoming, caring and supportive. As a parent, it is great to see my son’s steps on his path to becoming a global citizen are marked with the love of learning, good values and a happy childhood.</p></div>
								       		<div class="clr"></div>
								       		<p class="tes_name"><strong style="font-style: italic;">Harry Nguyen Bui, from Vietnam</strong></p>
								       </div>
						</div>

						<div class="item">
								       <div class="tes_left">
								       	  <div class="image">
								       	  	 <img src="images/Stevensons.jpeg" class="img-responsive" alt="Stevenson Family – From Australia review about SaiGon Star HCMC">
								       	  </div>
								       </div>
								       <div class="tes_right">

								       		<div class="cbi_scrollbar tes_content"><p>Jasmine has been at Saigon Star for since we moved to HCMC in 2011 and we intend to continue her schooling here. The reason being is because we are very happy with the environment she’s been in: – the super friendly school teachers and staff – the family-oriented environment that the teachers, parents and students have created together, – the professional and at the same time fun teaching which has encouraged Jasmine to always want to do more and take pride in what she does. Thank you to all the school staff and teachers for making us truly happy and proud parents. We are certain that Jasmine will continue to shine here as one of the Saigon School stars.</p></div>
								       		<div class="clr"></div>
								       		<p class="tes_name"><strong style="font-style: italic;">Le & Peter Holdsworth, from Vietnam & UK</strong></p>
								       </div>
						</div>
						<div class="item">
								       <div class="tes_left">
								       	  <div class="image">
								       	  	 <img src="images/Butragueno-Antolin.jpeg" class="img-responsive" alt="Butragueno Antolin Family - From Spain review about SaiGon Star HCMC">
								       	  </div>
								       </div>
								       <div class="tes_right">

								       		<div class="cbi_scrollbar tes_content"><p>My daughters spent three years at Saigon Star and had such a wonderful experience. They received a depth and diversity of education that put them well ahead of their peers back home. They were well nurtured in their talents and encouraged in their weaknesses. Because of their education at Saigon Star, both daughters tested very high and were accepted into the accelerated learning program at their new school.</p></div>
								       		<div class="clr"></div>
								       		<p class="tes_name"><strong style="font-style: italic;">Taunya Lofgran, from the USA</strong></p>
								       </div>
						</div>
				</div>
		    </div>


		</div>

	</div>
</div>

<script type="text/javascript">
function downloadGooglCal(type, id){
	var url_get = "#"+"&t="+ type+"&id="+ id;
	console.log(type);
	console.log(id);
	$.ajax({
		type: "POST",
		url: url_get,
		success: function(str) {
			var obj = JSON.parse(str);
			if(obj=="" || obj==null){
				show_alert('ERROR_CANNOT_EXPORT_CALENDAR');
			} else {
				location.href = "https://www.sgstar.edu.vn"+obj;
			}
		}
	});
}
</script>

<div id="sysAlertModal" class="modal fade sysAlertModal" role="dialog">
     <div class="modal-dialog">
        <div class="modal-content">
               <div class="modal-header" id="sysalert_header">
                     <button type="button" class="close" data-dismiss="modal">×</button>
                     <h4 class="modal-title">Message</h4>
               </div>
               <div class="modal-body">
                    <p id="sys_alert"></p>
               </div>
        </div>
    </div>
</div>

<script type="text/javascript">
jQuery(function($){
    function show_alert(msg){
        $("#sys_alert").html(msg);
        $('#sysAlertModal').modal();
    }
        $('#sysAlertModal').on('hidden.bs.modal', function (e) {
       $.ajax({
                type: "POST",
                data: "",
                url: "https://www.sgstar.edu.vn/remove_alert.php",
                success: function(msg)
                {
                }
        });
    });
});
$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>
<div class="clr"></div>
<div class="full left box_maps">
	<iframe src="embed.html" width="500" height="600" frameborder="0" style="border:0" allowfullscreen=""></iframe>
</div>
<div class="full left" style="text-align: center;">
	<a href="https://www.google.com/maps/place/Trường+Quốc+Tế+SaiGon+Star" target="_blank" class="download">GET DIRECTIONS</a>
</div>

@endsection
