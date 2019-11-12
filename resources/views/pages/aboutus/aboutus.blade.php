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
                                <a href="about-us.html" property="item" typeof="WebPage">
                                    <span property="name">About us</span>
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

<div class="title headerArea">
        <div class="col12 clearfix">
            <h1>About SAIGON STAR INTERNATIONAL SCHOOL</h1>
            <p>SaiGon Star is the International school. We are a family of 66 international schools, boarding schools and private schools located in 29 countries around the world. Together, we educate more than 250 students between the ages of 2 and 10 years old.</p>
        </div>
</div>
<div class="two_col_wrap clearfix">
        <div class="colHeightFix">
                    <div class="innerCol col12">
                         <div class="htmlContent">
                                <div class="contentBlock clearfix">
                                            <div class="supportingContent">
                                                <img src="{{asset('images/thumbnail/about-nord-anglia-education-05.jpg')}}" alt="Be Ambitious" class="contentImage">
                                            
                                            </div>
                                            <div class="innerContent">
                                                <p>We are driven by one unifying philosophy – we are ambitious for our students, our people and our family of schools. We believe there is no limit to what our students can achieve and our approach supports every child to succeed academically, socially and personally.</p>

                                            </div>
                                </div>
                                <div class="contentBlock clearfix">
                                        <div class="supportingContent">
                                            <img src="{{asset('images/thumbnail/about-nord-anglia-education-01.jpg')}}"  alt="Global Community" class="contentImage">
                                        </div>
                                        <div class="innerContent">
                                            <p>We enrich your child’s learning experience with opportunities beyond the ordinary. From online debates and challenges connects our students around the world to learn together every day.</p>

                                        </div>
                                </div>
                                <div class="contentBlock clearfix">
                                        <div class="supportingContent">
                                            <img src="{{asset('images/thumbnail/about-nord-anglia-education-03.jpg')}}"  alt="Personalised learning" class="contentImage">
                                        </div>
                                        <div class="innerContent">
                                            <p>Small class sizes mean our teachers know every child individually and can respond to your child’s strengths, adapting our <a data-type="2" href="#">learning model</a> to help them overcome challenges. We nurture essential skills to equip your child to succeed in every aspect of their education.</p>

                                        </div>
                                </div>

                                <div class="contentBlock clearfix">

                                <div class="supportingContent">
                                    <img src="{{asset('images/thumbnail/about-nord-anglia-education-02.jpg')}}" alt="Learn from the best" class="contentImage">
                                </div>

                                <div class="innerContent">
                                    <p>We know the difference that <a data-type="2" href="#">great teaching</a> makes to your child’s success at school. That’s why we have developed a unique approach to teacher recruitment, training and support that ensures your child learns from the best.</p>

                                </div>
                                </div>

                                <div class="contentBlock clearfix">

                                        <div class="supportingContent">
                                            <img src="{{asset('images/thumbnail/about-nord-anglia-education-04.jpg')}}"  alt="Success for every student" class="contentImage">
                                        </div>
                                        <div class="innerContent">
                                                    <p>Our <a data-type="2" href="#">academic results</a> are testament to this approach.</p>
                                                    <p>And for us, academic success is just the beginning. Our school will nurture your child’s talents so that they can succeed in every aspect of their education, from sports to arts, languages or technology. We encourage every student to love learning, to try something new, and, above all, to be ambitious.</p>

                                        </div>
                                </div>
                                </div>
                                <div class="htmlContent">
                                    <div class="related_links">
                                        <h2>Find out more</h2>
                                        <ul>
                                            <li class="first l1"><a href="OurCurriculum.html">International Curriculum</a></li>
                                            <li class="l2"><a href="#">Our Accreditations</a></li>
                                            <li class="l3"><a href="#">Why choose saigon star international school?</a></li>
                                            <li class="last l4"><a href="#"> Results 2018</a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="clearfix"></div> 
                                        <div class="shareThis">
                                        <p>Share this page:</p>
                                            <a class="addthis_button"> <img src="{{asset('images/share.png')}}" width="18" height="20" alt="Share"></a>
                                        </div>
                                </div>
                                </div>

                                <div class="signpost_wrap colBeta dl-container" data-dl-container="right_side_nav">
                                    <div id="Body_Body_Body_SignpostList1_SignPostSignpostList1" class="inner">
                                    <ul>
                                        <li>
                                                <div class="vietnamDarkRed signpost"></div>
                                        </li>
                                        <li>
                                        <div class="vietnamMidRed signpost">
                                            <a href="#" data-dl-clicklabel="h2">
                                                <img src="{{asset('images/img_menublock.png')}}" id="Body_Body_Body_SignpostList1_SignPost1_ctl00_ctl06_ctl00" alt="_KC_2161">
                                                <div class="inner">
                                                    <h2>Our Parents</h2>
                                                    <p class="text">Parent feedback is extremely important to us. It helps us to understand what we are doing well and to look at opportunities for improvement</p>
                                                    <p class="link"><span>Parent feedback</span></p>
                                                </div>
                                            </a>
                                        </div>
                                        </li>
                                    </ul>
                        </div>
        </div>
</div>

@endsection