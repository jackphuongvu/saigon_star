@extends('layouts.master')
<div class="full left header_top">
	<div class="w_1280">
		<a href="<?php echo url('home') ?>" class="logo">
			<img style="background-color: white;" src="{{asset('images/Logo-horizontal.jpg')}}" class="desk" alt="Saigon Star International">
			<img src="{{asset('images/Logo-horizontal.jpg')}}" class="mobile">
		</a>
		<div class="header_top_r ">
			<div class="header_r_t">
				<div class="hotline">
					<span>Admissions Phone Number</span>
					<a href="tel:8428 7300 7257">+8428 7300 7257</a>
				</div>

				<div id="bt_menumobile" class="hidden">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- top search -->
				<div class="inner-addon right-addon top_searh">
				<form action="https://www.sgstar.edu.vn/index.php" method="get">
				  <input type="hidden" name="m" value="search">
		          <i class="glyphicon glyphicon-search"></i>
		          <input name="q" id="s_text" type="text" value="" class="form-control" placeholder="Keyword ...">
		        </form>
		        </div>
				<!-- /top search -->
				<!--Parents' Essentials-->
				<!-- <div class="login-bar">
					<div>
						<a class="parentEssentials join-us-link"  href="parents.html">Parents' Essentials</a>
					</div>
				</div> -->
				<!--endParents' Essentials-->
			</div>

		</div>
	</div>
</div>
<div class="clr"></div>
