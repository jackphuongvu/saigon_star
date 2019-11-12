@extends('layouts.master')
@section('content')
<div class="full left" id="banner_subpage">
	<div id="subpage_Carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner" >
                <div class="item active">
                    <img src="{{asset('images/banner/Saigon_Star_International_School.jpg')}}" class="img-responsive">
                </div>
                <div class="item ">
                    <img src="{{asset('images/banner/Here_We_Go_Sun_Bears.jpg')}}" class="img-responsive">
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
					  		<a href="<?php echo url('/aboutus/leadershipTeam')?>" property="item" typeof="WebPage">
					  			<span property="name">Leadership Team</span>
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
<div class="full left subpage_content greybg leadershippg">

	<div class="w_1280">

		<div class="subpage_content_in">

			<div class="subcontent">

				<div class="box_3_title">

				<h1 class="titGroup text-center">Leadership Team</h1></div>
				<div class="clr"></div>
				<div class="box_3_des"></div>

				<div class="clr"></div>
				<div class="item colleft">
                            <div class="col1">
                                    <div class="image-group image-cropper">

                                        <img src="{{asset('images/teacher/James.jpg')}}" class="rounded " alt="Sean O&#039;Maonaigh - Head of School at EIS">

                                    </div>

                            </div>

                            <div class="col2">
                                    <div class="title">
                                        <span class="orangeTit">James Quantrill </span> 
                                        <span class="normal">Headteacher</span>
                                    </div>
                                    <div class="desc">
                                        <span id="excerpt1">
                                            Post Graduate Certificate in Education Bachelor of Business and Management (Hons) James attained Qualified Teacher Status from the Chase Lane Primary School Programme in Essex, England. After four years teaching in his initial placement at the very same school, James moved to an 'Outstanding' school, Lawford C of E Primary School, where he led the Sports and oversaw the introduction to the new Computing curriculum.... <div class="parentplusmore"><button id="readmoreshow1" onclick="extendReadMore('excerpt1', 'readmoreshow1', 'fulldesc1');" current="excerpt" class="ico plusmore" ></button></div>
                                        </span>
                                        <span class="fulldesc" id="fulldesc1"><p>James spent three years there, becoming part of the Leadership team and assuming the role of Key Stage 2 Manager in his final year. Seeking new challenges further afield, James joined the Saigon Star family in 2014. James uses his soccer knowledge to good use when coaching the school team but also in his spare time when he plays in the Saigon International Football League. Elsewhere, he also enjoys travelling, adventure sports, tennis and films. &nbsp;&nbsp;</p></span>
                                    </div>

                            </div>

				</div>
				<div class="item colright">
                                    <div class="col1">
                                            <div class="image-group image-cropper">
                                                <img src="{{asset('images/teacher/Brendan.jpg')}}" class="rounded " alt="Jo Roberts - Head of Early Years & Primary at EIS">
                                            </div>
                                    </div>
                                    <div class="col2">
                                        <div class="title">
                                            <span class="orangeTit">Brendan Hearne</span> 
                                            <span class="normal">Learning and Development Director</span>
                                        </div>
                                        <div class="desc">
                                            <span id="excerpt3">
                                            First Class BA (Hons) in Primary Education with Qualified Teacher Status, St. Martin's College, Ambleside.

                Brendan originates from the UK and first joined Saigon Star International School in August 2013 . He has since progressed through the ranks and became Headteacher in 2017, following a successful two years as Deputy Head. In his first year as Headteacher, Brendan led Saigon Star to become the first IPC-accredited school in Vietnam... <div class="parentplusmore"><button id="readmoreshow3" onclick="extendReadMore('excerpt3', 'readmoreshow3', 'fulldesc3');" current="excerpt" class="ico plusmore" ></button></div>
                                            </span>

                                            <span class="fulldesc" id="fulldesc3">
                                                <p><span style="font-weight: 400;">During this time he also became a regional trainer for the International Primary Curriculum (IPC ) and presented at the 2018 Festival of Learning for Asia. Beyond the school day, Brendan likes to play tennis, is a keen golfer, and regularly enjoys motorbike trips during his holidays. </span></p>
                                                <p><span style="font-weight: 400;">Jo is passionate about &nbsp;childhood development in the Early and Primary Years and is committed to providing the highest quality of education to young learners. She believes in a holistic approach to teaching and learning that equips children with an excellent foundation to becoming lifelong learners.</span></p>
                                                <p><span style="font-weight: 400;">Prior to joining EIS, Jo worked for many years at the British Council in Ho Chi Minh City. She has been teaching internationally for almost 16 years, having taught in Taiwan, China and New Zealand before settling down and calling Vietnam home in 2003.</span></p>
                                                <p><span style="font-weight: 400;">Jo enjoys spending most of her free time with her daughter and has recently completed a Masters in International Education.</span></p></span>
                                        </div>
                                    </div>
				</div>
				<div class="item colleft">
					<div class="col1">
						<div class="image-group image-cropper">
							<img src="{{asset('images/teacher/Karl.jpg')}}" class="rounded " alt="Karl">
						</div>

					</div>

					<div class="col2">

						<div class="title">
							<span class="orangeTit">Karl Perkins</span> 
							<span class="normal">Development business</span>
						</div>

						<div class="desc">
							<span id="excerpt4">
							 Karl Perkins joined SGS in July 2015, but he is not new to Vietnam. Prior to joining saigon star, Mark worked in another well known International School in Saigon for seven years. He is an experienced IB teacher and is also an IBDP examiner and has held several management roles in schools. Prior to living and teaching in Vietnam, Mark worked in one of Australia's oldest private schools. Before that, he worked as a Hotel General Manager for Accor, one of the... <div class="parentplusmore"><button id="readmoreshow4" onclick="extendReadMore('excerpt4', 'readmoreshow4', 'fulldesc4');" current="excerpt" class="ico plusmore" ></button></div>
							</span>
							<span class="fulldesc" id="fulldesc4"><p><span style="font-weight: 400;">Mark Rees joined EIS in July 2015, but he is not new to Vietnam. Prior to joining EIS, Mark worked in another well known International School in Saigon for seven years. He is an experienced IB teacher and is also an IBDP examiner and has held several management roles in schools.</span></p>
                                <p><span style="font-weight: 400;">Prior to living and teaching in Vietnam, Mark worked in one of Australia's oldest private schools. Before that, he worked as a Hotel General Manager for Accor, one of the world's largest hotel companies. He has also worked as a Business Consultant in Indonesia, was a Regional Manager for Australian Unity and was the first Director of Macquarie University College, one of Australia's largest residential colleges. </span></p>
                                <p><span style="font-weight: 400;">Mark is an avid rugby fan and played in his earlier years at school, although he will readily admit that he had more heart than ability as a rugby player. He is an avid long distance walker and has walked the 800km Camino de Santiago twice. He is married to a fellow teacher, Thuy, and they have two children, Gabby and Isabella. Both girls attend the Early Years section at EIS.</span></p></span>
						</div>
					</div>
				</div>
				<div class="item colright">

					<div class="col1">

						<div class="image-group image-cropper">

							<img src="{{asset('images/teacher/Edward Kellett.jpg')}}" class="rounded " alt="Tony Shadwell - General Director">

						</div>

					</div>

					<div class="col2">
						<div class="title">
							<span class="orangeTit">Edward Kellett</span> 
							<span class="normal">General Director / Business Manager </span>
						</div>
						<div class="desc">
							<span id="excerpt2">
							 Tony is a seasoned education management professional; is a qualified Chartered Accountant (Australia and New Zealand); and holds an MBA degree, awarded by 21 universities globally.&nbsp;&nbsp; Tony worked together with EIS&rsquo; new incoming Headmaster, Mr Sean O&rsquo;Maonaigh, at one of Saigon&rsquo;s most prestigious international schools (ISHCMC) for over 14 years; filling various roles in that time, including Business Manager and Member of... <div class="parentplusmore"><button id="readmoreshow2" onclick="extendReadMore('excerpt2', 'readmoreshow2', 'fulldesc2');" current="excerpt" class="ico plusmore" ></button></div>
							</span>
							<span class="fulldesc" id="fulldesc2">
                                <p>Tony is a seasoned education management professional; is a qualified Chartered Accountant (Australia and New Zealand); and holds an MBA degree, awarded by 21 universities globally.&nbsp;&nbsp;</p>
                                <p>Tony worked together with EIS&rsquo; new incoming Headmaster, Mr Sean O&rsquo;Maonaigh, at one of Saigon&rsquo;s most prestigious international schools (ISHCMC) for over 14 years; filling various roles in that time, including Business Manager and Member of the School&rsquo;s Board of Management.&nbsp;&nbsp;</p>
                                <p>Tony has also orchestrated several start-up businesses in Saigon, mostly within the hospitality industry, growing them from incubation to thriving profitable businesses.&nbsp;&nbsp;</p>
                                <p>Tony is married to &lsquo;Doctor Jane&rsquo; (Family Medical Practice) and they have two daughters, aged 16 and 14.&nbsp;</p>
                                <p>Having lived and worked in HCMC for more than 20 years, Tony is truly familiar with the local landscape and brings a wealth of on-the-ground experience to the senior leadership team.</p>
                            </span>
						</div>

					</div>

				</div>

				
			</div>

		</div>

	</div>

</div>

@endsection