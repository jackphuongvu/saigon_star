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
                                <a href="#" property="item" typeof="WebPage">
                                    <span property="name">Admissions</span>
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
<div class="full left subpage_info section_contact">

        <div class="w_1280">
    
            <div class="full left text-center">
    
                <h1 class="head_title_gallery">Contact Us</h1>
    
            </div>
    
            <div class="clr"></div>
    
            <div class="full left" id="content_contact">
    
                    <div class="contact_left">
    
                        <div class="full left name">Saigon Star International School</div>
    
                        <div class="full left address">Residential Area No. 5, Su Hy Nhan Street, Thanh My Loi Ward, District 2</div>
    
                        <div class="clr"></div>
    
                        <div class="full left item">
    
                            <div class="contact_label">Phone: </div>
    
                            <div class="contact_content">(+8428) 3742 3222 </div>
    
                        </div>
    
                        <div class="clr"></div>
    
                        <div class="full left item">
    
                        <div class="contact_label">Fax: </div>
    
                        <div class="contact_content">(+8428) 8800 6996</div>
    
                    </div>
    
                        <div class="clr"></div>
    
                        <div class="full left item">
    
                        <div class="contact_label">Email: </div>
    
                        <div class="contact_content">info@sgstar.edu.vn</div>
    
                    </div>
    
                    </div>
    
                    <div class="contact_form contact_right">
    
                        <form name="frmCon" id="frmCon" method="post" action="#" style="margin:0" novalidate="novalidate" class="fv-form fv-form-bootstrap"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>  
    
                            <div class="form-group contact_int"><input type="text" name="name" id="name" class="form-control form_contact" placeholder="Full Name *" value="" required="" data-fv-field="name"><small class="help-block" data-fv-validator="notEmpty" data-fv-for="name" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter your name</small></div>                
    
                                               
    
                            <div class="form-group contact_int"><input type="email" name="email" id="inputEmail" class="form-control form_contact" placeholder="Email *" value="" required="" data-fv-field="email"><small class="help-block" data-fv-validator="notEmpty" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter your email</small><small class="help-block" data-fv-validator="emailAddress" data-fv-for="email" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small></div>                                        
    
                          
    
                            <div class="form-group contact_int"><input type="text" name="phone" id="subject" class="form-control form_contact" placeholder="Phone" value="" tabindex="3"></div>                                      
    
                            
    
                            <div class="form-group contact_int"><textarea name="message" rows="6" class="form-control form_contact" placeholder="Message *" tabindex="4" required="" data-fv-field="message"></textarea><small class="help-block" data-fv-validator="notEmpty" data-fv-for="message" data-fv-result="NOT_VALIDATED" style="display: none;">Please enter your message</small></div>
    
                             
    
                            <div class="login_lable">Security Code *</div>                 
    
                            <div id="captchaContainer" data-sitekey="6LchJHsUAAAAANTnyoAjLj3lShxSMpoRQ02y37uH"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LchJHsUAAAAANTnyoAjLj3lShxSMpoRQ02y37uH&amp;co=aHR0cHM6Ly93d3cuZWlzaGNtYy5jb206NDQz&amp;hl=en&amp;v=5fbZx3NV5xhaMoMLrZV3TkN4&amp;theme=light&amp;size=normal&amp;cb=jhmp9cor2160" width="304" height="78" role="presentation" name="a-8dtkr1tyiw5t" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" data-fv-field="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
    
                            <div id="captchaMessage" class="help-block"><small class="help-block" data-fv-validator="callback" data-fv-for="g-recaptcha-response" data-fv-result="NOT_VALIDATED" style="display: none;">The captcha is not valid</small></div>
    
                            <div class="clr"></div>
                            <input type="submit" name="bt_submit" class="download bt_contact" value="Submit" tabindex="6">
    
                        </form>
                    </div><!-- end contact_form --> 
            </div>
    
    </div>
    
    </div>

@endsection