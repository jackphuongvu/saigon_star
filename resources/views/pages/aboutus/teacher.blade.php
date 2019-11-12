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
					  	<a property="item" typeof="WebPage" href="http://www.sgstar.edu.vn/">
					  		<span property="name">Home Page</span>
					  	</a>
					  	<meta property="position" content="1">
				  	</span>
				  </li>
				  <li class="active">
				  	<span property="itemListElement" typeof="ListItem">
				  		<a href="<?php echo url('/aboutus/teacher')?>"  property="item" typeof="WebPage">
				  			<span property="name">Teacher(filtered by phase)</span>
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
<div class="full left bg_f6f6f6 box_faculty">
	<div class="w_1280">
		<div class="box_3_title"><h1>Teacher(filtered by phase)</h1></div>
		<div class="clr"></div>
		<div class="box_3_des">
            <p><span style="font-weight: 400;"> 
            <strong><a href="http://www.sgstar.edu.vn/">SAIGON STAR International school</a></strong> workshops to keep them at the cutting-edge of this challenging curriculum.</span></p>
            <p><span style="font-weight: 400;">giới thiệu về trường và giáo viên</span></p>		</div>			
		<div class="clr"></div>

		<div class="list_team list_team_new" id="list_team">
	        <div class="team_item_w">
			        <div class="ih-item square effect6 from_top_and_bottom team_item">
			       		<a href="javascript:void(0);">
						        <div class="img"><img src="{{asset('images/teacher/james.jpg')}}" alt="Michael Perry - PYP Coordinator / Primary Team Leader at EIS"></div>
						        <div class="info hidden_mobile">
						        	<div class="info_in">
						          		<h3>James Quantrill</h3>
						          		<h4>Headteacher</h4>
						          		<div class="clr"></div>
						          		<div class="des">
							          		<p></p>
							          		<p>Nationality:&nbsp;England</p>
											<p>Qualification:<br>- Post Graduate Certificate in Education Bachelor of Business and Management (Hons) <br>- M.A. International Education, Deakin University, Australia <br>- PGCE in Career Development, Australian Catholic University, Australia</p>
											<p>&nbsp;</p>
											<p></p>
						          		</div>

						        	</div>

						        </div>
						 </a>		    	
				    </div>
				    <h3>James Quantrill</h3>

			        <div class="from_top_and_bottom  hidden show_1024n cbi_scrollbar ">
				        <div class="info">
				        	<div class="info_in">
					          		<h4>PYP Coordinator / Primary Team Leader</h4>
					          		<div class="clr"></div>
					          		<div class="show-read-more">
					          			<p>Nationality:&nbsp;Australian</p>
										<p>Qualification:<br>- Bachelor of Education, University of South Australia, Australia <br>- M.A. International Education, Deakin University, Australia <br>- PGCE in Career Development, Australian Catholic University, Australia</p>
										<p>&nbsp;</p>				          		
									</div>

					        </div>

				       	</div>		    	
				   	</div>
			</div>
			<div class="team_item_w">
			        <div class="ih-item square effect6 from_top_and_bottom team_item">
			       		<a href="javascript:void(0);">
				        <div class="img"><img src="{{asset('images/teacher/Asmaa.jpg')}}" alt="Fleur Serriere - MYP Coordinator / French Teacher / Grade 10 Homeroom Teacher at EIS"></div>
				        <div class="info hidden_mobile">
				        	<div class="info_in">
				          		<h3>Asmaa Hussein</h3>
				          		<h4>MYP Coordinator / French Teacher / Grade 10 Homeroom Teacher</h4>
				          		<div class="clr"></div>
				          		<div class="des">
				          		<p>
				          			</p><p>Nationality:&nbsp;French</p>
                                    <p>Qualification: <br>- B.A. in English &amp; Spanish, Institut de Langues Vivantes, France <br>- Master of Professional Studies, University of Auckland, New Zealand <br>- Diploma of Teaching, Auckland College of Education, New Zealand</p>				          		<p></p>
				          		</div>

				        	</div>

				        </div>	

				        </a>		    	
				    </div>
				    <h3>Asmaa Hussein</h3>

			        <div class="from_top_and_bottom  hidden show_1024n cbi_scrollbar ">
				        <div class="info">
				        	<div class="info_in">
				          		<h4>MYP Coordinator / French Teacher / Grade 10 Homeroom Teacher</h4>
				          		<div class="clr"></div>
				          		<div class="show-read-more">
				          			<p>Nationality:&nbsp;French</p>
                                    <p>Qualification: <br>- B.A. in English &amp; Spanish, Institut de Langues Vivantes, France <br>- Master of Professional Studies, University of Auckland, New Zealand <br>- Diploma of Teaching, Auckland College of Education, New Zealand</p>				          		</div>

				        	</div>

				        </div>		    	
				    </div>
				</div>
		        <div class="team_item_w">
			        <div class="ih-item square effect6 from_top_and_bottom team_item">
			       		<a href="javascript:void(0);">
				        <div class="img"><img src="{{asset('images/teacher/Brendan.jpg')}}" alt="Erin Tacey - DP Coordinator / DP English Teacher"></div>
				        <div class="info hidden_mobile">
				        	<div class="info_in">
				          		<h3>Brendan Hearne</h3>
				          		<h4>DP Coordinator / DP English Teacher</h4>
				          		<div class="clr"></div>
				          		<div class="des">
				          		<p>
				          			</p><p>Nationality:&nbsp;Australian</p>
                                    <p>Qualification: <br>- B.A., Deakin University, Australia <br>- Graduate Diploma in Education, Australian Catholic University, Australia</p>				          		<p></p>
				          		</div>

				        	</div>

				        </div>	

				        </a>		    	
				    </div>
				    <h3>Brendan Hearne</h3>

			        <div class="from_top_and_bottom  hidden show_1024n cbi_scrollbar ">
				        <div class="info">
				        	<div class="info_in">
				          		<h4>DP Coordinator / DP English Teacher</h4>
				          		<div class="clr"></div>
				          		<div class="show-read-more">
				          			<p>Nationality:&nbsp;Australian</p>
                                    <p>Qualification: <br>- B.A., Deakin University, Australia <br>- Graduate Diploma in Education, Australian Catholic University, Australia</p>			
                                </div>
				        	</div>
				        </div>		    	
				    </div>
				</div>
		        <div class="team_item_w">
			        <div class="ih-item square effect6 from_top_and_bottom team_item">
			       		<a href="javascript:void(0);">
				        <div class="img"><img src="{{asset('images/teacher/Trisha.jpg')}}" alt="Shane Priddis - Teaching &amp; Learning Support Coordinator/ Support Services Coordinator at EIS"></div>
				        <div class="info hidden_mobile">
				        	<div class="info_in">
				          		<h3>Shane Priddis</h3>
				          		<h4>Teaching &amp; Learning Support Coordinator/ Support Services Coordinator</h4>
				          		<div class="clr"></div>
				          		<div class="des">
				          		<p>
				          			</p><p>Nationality:&nbsp;Australian</p>
                                    <p>Qualification: <br>- B. Special Edu., The Flinders University of South Australia, Australia <br>- Diploma of Teaching, Polding College, Australia</p>				          		<p></p>
				          		</div>

				        	</div>

				        </div>	

				        </a>		    	
				    </div>
				    <h3>Shane Priddis</h3>

			        <div class="from_top_and_bottom  hidden show_1024n cbi_scrollbar ">
				        <div class="info">
				        	<div class="info_in">
				          		<h4>Teaching &amp; Learning Support Coordinator/ Support Services Coordinator</h4>
				          		<div class="clr"></div>
				          		<div class="show-read-more">
				          			<p>Nationality:&nbsp;Australian</p>
                                    <p>Qualification: <br>- B. Special Edu., The Flinders University of South Australia, Australia <br>- Diploma of Teaching, Polding College, Australia</p>				          		</div>

				        	</div>

				        </div>		    	
				    </div>
				</div>
		        <div class="team_item_w">
			        <div class="ih-item square effect6 from_top_and_bottom team_item">
			       		<a href="javascript:void(0);">
				        <div class="img"><img src="{{asset('images/teacher/Karl.jpg')}}" alt="Isabelle Rampa - School Counsellor  at EIS"></div>
				        <div class="info hidden_mobile">
				        	<div class="info_in">
				          		<h3>Karl Perkins</h3>
				          		<h4>School Counsellor </h4>
				          		<div class="clr"></div>
				          		<div class="des">
				          		<p>
				          			</p><p>Nationality:&nbsp;French</p>
                                    <p>Qualification:<br>-&nbsp;<span data-sheets-value="{" data-sheets-userformat="{">B.A in Psychotraumatology, Sorbonne University, Paris, France<br>-&nbsp;M.A, Clinical Psychology, Sorbonne University, Paris, France<br></span><span data-sheets-value="{" data-sheets-userformat="{">- Master's Degree in Project Management in Local and International Cooperation from the IFAID Institute in Bordeaux, France</span></p>				          		<p></p>
				          		</div>

				        	</div>

				        </div>	

				        </a>		    	
				    </div>
				    <h3>Karl Perkins</h3>
			        <div class="from_top_and_bottom  hidden show_1024n cbi_scrollbar ">
				        <div class="info">
				        	<div class="info_in">
				          		<h4>School Counsellor </h4>
				          		<div class="clr"></div>
				          		<div class="show-read-more">
				          			<p>Nationality:&nbsp;French</p>         
                                    <p>Qualification:<br>-&nbsp;<span data-sheets-value="{" data-sheets-userformat="{">B.A in Psychotraumatology, Sorbonne University, Paris, France<br>-&nbsp;M.A, Clinical Psychology, Sorbonne University, Paris, France<br></span><span data-sheets-value="{" data-sheets-userformat="{">- Master's Degree in Project Management in Local and International Cooperation from the IFAID Institute in Bordeaux, France</span></p>				          		</div>

				        	</div>
				        </div>		    	
				    </div>
				</div>
		         <div class="team_item_w">
			        <div class="ih-item square effect6 from_top_and_bottom team_item">
			       		<a href="javascript:void(0);">
				        <div class="img"><img src="{{asset('images/teacher/Chiara.jpg')}}" alt="Pablo Viedma - Head of Technology at SGS"></div>
				        <div class="info hidden_mobile">
				        	<div class="info_in">
				          		<h3>Chiara Bernesi</h3>
				          		<h4>Head of Technology</h4>
				          		<div class="clr"></div>
				          		<div class="des">
				          		    <p>Nationality:&nbsp;American</p>
                                    <p>Qualification:<br>- M.A Educational Technology and Spanish, Illinois State University, USA, 1998</p>	
				          		</div>

				        	</div>

				        </div>	

				        </a>		    	
				    </div>
				    <h3>Chiara Bernesi</h3>
			        <div class="from_top_and_bottom  hidden show_1024n cbi_scrollbar ">
				        <div class="info">
				        	<div class="info_in">
				          		<h4>Head of Technology</h4>
				          		<div class="clr"></div>
				          		<div class="show-read-more">
				          			<p>Nationality:&nbsp;American</p>
                                    <p>Qualification:<br>- M.A Educational Technology and Spanish, Illinois State University, USA, 1998</p>				          		
                                </div>
				        	</div>
				        </div>		    	
				    </div>
				</div>
		        <div class="team_item_w">
			        <div class="ih-item square effect6 from_top_and_bottom team_item">
			       		<a href="javascript:void(0);">
				        <div class="img"><img src="{{asset('images/teacher/hinhgiaovien2.jpg')}}" alt="Rebekka Pfaff - Teacher Librarian  at EIS"></div>
				        <div class="info hidden_mobile">
				        	<div class="info_in">
				          		<h3>Yasmeen Russul Saib</h3>
				          		<h4>Teacher Librarian </h4>
				          		<div class="clr"></div>
				          		<div class="des">
                                            <p>Nationality: Deutsch</p>
                                            <p>Qualification:<br>- B.A Library Management, University of Applied Sciences Potsdam, Germany, 2015</p>
				          		</div>
				        	</div>
				        </div>	
				        </a>		    	
				    </div>
				    <h3>Yasmeen Russul Saib</h3>
			        <div class="from_top_and_bottom  hidden show_1024n cbi_scrollbar ">
				        <div class="info">
				        	<div class="info_in">
				          		<h4>Teacher Librarian </h4>
				          		<div class="clr"></div>
				          		<div class="show-read-more">
	    			          			<p>Nationality: Deutsch</p>
                                        <p>Qualification:<br>- B.A Library Management, University of Applied Sciences Potsdam, Germany, 2015</p>
                                </div>
				        	</div>
				        </div>		    	
				    </div>
				</div>
		        		        <div class="team_item_w">
			        <div class="ih-item square effect6 from_top_and_bottom team_item">
			       		<a href="javascript:void(0);">
				        <div class="img"><img src="{{asset('images/teacher/hinhgiaovien.jpg')}}" alt="Milette Pagulayan - Toodler Homeroom Teacher at EIS"></div>
				        <div class="info hidden_mobile">
				        	<div class="info_in">
				          		<h3>Nicola Isabel Gilmour</h3>
				          		<h4>Toodler Homeroom Teacher</h4>
				          		<div class="clr"></div>
				          		<div class="des">
				          		        <p>Nationality: Filipino</p>
                                        <p>Qualification:<br>- B.A. Secondary Education, Saint Mary's University, Philippines, 2007</p>	
				          		</div>

				        	</div>

				        </div>	

				        </a>		    	
				    </div>
				    <h3>Nicola Isabel Gilmour</h3>

			        <div class="from_top_and_bottom  hidden show_1024n cbi_scrollbar ">
				        <div class="info">
				        	<div class="info_in">
				          		<h4>Toodler Homeroom Teacher</h4>
				          		<div class="clr"></div>
				          		<div class="show-read-more">
				          			<p>Nationality: Filipino</p>
                                    <p>Qualification:<br>- B.A. Secondary Education, Saint Mary's University, Philippines, 2007</p>				          		
                                </div>
				        	</div>

				        </div>		    	
				    </div>
				</div>
		</div>
	</div>
</div>

@endsection