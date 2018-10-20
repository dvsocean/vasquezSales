<!DOCTYPE HTML>
<html>
	<?php
	$signedIn = Auth::check();
	$user = Auth::user();
	$fpc = App\FrontPageContent::find(1);
	$tiny = App\TinyImages::find(1);
	$bicon = \App\FrontpageBicons::find(1);
	$monitor = \App\MonitorImages::find(1);
	$quads = \App\FrontPageQuads::find(1);
	?>
	<!--HEADER-->
	@include('includes.header_footer.header')
	<!--HEADER-->

	<body>
			<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!--NAV-->
				@include('includes.nav_menu.nav')
				<!--NAV-->

				<!-- Banner -->
				<!--
					Note: If you'd like to use a video as your banner background, set the "data-video" attribute below
					to the full filename of your video, but *exclude* the file extension. The template will automatically
					generate a multi-format* <video> tag on platforms that support background videos, and simply skip the
					step on those that don't (falling back on whatever you've set as the background image).

					* Your video must be offered in both .mp4 and .webm formats to work everywhere.
				-->
				{{--<section id="banner" data-video="images/banner">--}}

				<!--TEMPORARILY QUARANTINED-->
					{{--<section id="banner" data-video="">--}}
						{{--<div class="inner">--}}
							{{--<header>--}}
								{{--<h1>{{$fpc->main_title}}</h1>--}}
								{{--@if($signedIn)--}}
									{{--<h2>Welcome {{$user->name}}</h2>--}}
									{{--@if($user->admin)--}}
										{{--<ul class="actions vertical">--}}
											{{--<li><a href="{{route('admin')}}" class="button big">Control Panel</a></li>--}}
										{{--</ul>--}}
									{{--@endif--}}
								{{--@endif--}}
							{{--</header>--}}
							{{--@if(!$signedIn)--}}
								{{--<p>Freightliner, Kenworth, Mack, Peterbuilt, Volvo, Hino, International</p>--}}
								{{--<ul class="actions vertical">--}}
									{{--<li><a href="{{route('register')}}" class="button big">Register</a></li>--}}
									{{--<li><a href="/login" class="button big">Login</a></li>--}}
								{{--</ul>--}}
							{{--@endif--}}
						{{--</div>--}}
						{{--<a href="#one" class="more">Learn More</a>--}}
					{{--</section>--}}
				<!--TEMPORARILY QUARANTINED-->

				<!--CUSTOM SLIDESHOW-->
				@include('includes.home_page_slideshow.slideshow')
				<!--CUSTOM SLIDESHOW-->

				<!--CUSTOM BUTTONS-->
				@include('includes.custom_home_page_buttons.custom_buttons')
				<!--CUSTOM BUTTONS-->

				<!-- Wrapper -->
					<div id="wrapper">
						<!-- One -->
							<section id="one" class="main">
								<div class="inner spotlight style1">
									<div class="content">
										<header>
											<h2>{{!empty($fpc->heading_one) ? $fpc->heading_one : 'REPLACE THIS TEXT'}}</h2>
										</header>
										<p>
											{{!empty($fpc->body_one) ? $fpc->body_one : 'REPLACE THIS TEXT'}}
										</p>
									</div>
									<!--
										replace the image below with a JPEG or PNG. Just make sure it's exactly
										320x340 or at least the same aspect ratio (16:17).
									-->
									<span class="image"><img src="{{!empty($monitor->image_one) ? 'monitor_images/' . $monitor->image_one : 'PLACEHOLDERS/monitor_images/performance.png'}}" alt="" /></span>
								</div>
							</section>

							<!-- Two -->
							<section id="two" class="main">
								<div class="inner spotlight alt style2">
									<div class="content">
										<header>
											<h2>{{!empty($fpc->heading_two) ? $fpc->heading_two : 'REPLACE THIS TEXT'}}</h2>
										</header>
										<p>
											{{!empty($fpc->body_two) ? $fpc->body_two : 'REPLACE THIS TEXT'}}
										</p>
									</div>
									<!--
										Note: You can replace the image below with a JPEG or PNG. Just make sure it's exactly
										320x340 or at least the same aspect ratio (16:17).
									-->
									<span class="image"><img src="{{!empty($monitor->image_two) ? 'monitor_images/' . $monitor->image_two : 'PLACEHOLDERS/monitor_images/dollar.png'}}" alt="" /></span>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="main">
								<div class="inner spotlight style3">
									<div class="content">
										<header>
											<h2>{{!empty($fpc->heading_three) ? $fpc->heading_three : 'REPLACE THIS TEXT'}}</h2>
										</header>
										<p>
											{{!empty($fpc->body_three) ? $fpc->body_three : 'REPLACE THIS TEXT'}}
										</p>
									</div>
									<!--
										Note: You can replace the image below with a JPEG or PNG. Just make sure it's exactly
										320x340 or at least the same aspect ratio (16:17).
									-->
									<span class="image"><img src="{{!empty($monitor->image_three) ? 'monitor_images/' . $monitor->image_three : 'PLACEHOLDERS/monitor_images/repair.png'}}" alt="" /></span>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="main special">
								<div class="inner">
									<header>
										<h2>{{!empty($fpc->quad_title) ? $fpc->quad_title : 'REPLACE THIS TEXT'}}</h2>
									</header>
									<div class="features">
										<section>
											<span class="icon major fab {{!empty($quads->quad_one) ? $quads->quad_one : 'fa-camera'}} style1"></span>
											<h3>{{!empty($fpc->quad_heading_one) ? $fpc->quad_heading_one : 'REPLACE THIS TEXT'}}</h3>
											<p>
												{{!empty($fpc->quad_body_one) ? $fpc->quad_body_one : 'REPLACE THIS TEXT'}}
											</p>
										</section>
										<section>
											<span class="icon major fas {{!empty($quads->quad_two) ? $quads->quad_two : 'fa-camera'}} style2"></span>
											<h3>{{!empty($fpc->quad_heading_two) ? $fpc->quad_heading_two : 'REPLACE THIS TEXT'}}</h3>
											<p>
												{{!empty($fpc->quad_body_two) ? $fpc->quad_body_two : 'REPLACE THIS TEXT'}}
											</p>
										</section>
										<section>
											<span class="icon major fas {{!empty($quads->quad_three) ? $quads->quad_three : 'fa-camera'}} style3"></span>
											<h3>{{!empty($fpc->quad_heading_three) ? $fpc->quad_heading_three : 'REPLACE THIS TEXT'}}</h3>
											<p>
												{{!empty($fpc->quad_body_three) ? $fpc->quad_body_three : 'REPLACE THIS TEXT'}}
											</p>
										</section>
										<section>
											<span class="icon major fas {{!empty($quads->quad_four) ? $quads->quad_four : 'fa-camera'}} style4"></span>
											<h3>{{!empty($fpc->quad_heading_four) ? $fpc->quad_heading_four : 'REPLACE THIS TEXT'}}</h3>
											<p>
												{{!empty($fpc->quad_body_four) ? $fpc->quad_body_four : 'REPLACE THIS TEXT'}}
											</p>
										</section>
									</div>
								</div>
							</section>

						<!-- CTA -->
							<section id="cta" class="main special">
								<div class="inner">
									<p>
										{{!empty($fpc->footer_title) ? $fpc->footer_title : 'REPLACE THIS TEXT'}}
									</p>
									<ul class="actions vertical">
										<li><a href="#" class="button big">{{!empty($bicon->footer_button) ? $bicon->footer_button : 'REPLACE'}}</a></li>
									</ul>
								</div>
							</section>

					</div>

				<!--FOOTER-->
				@include('includes.header_footer.footer')
				<!--FOOTER-->
			</div>
	</body>
</html>