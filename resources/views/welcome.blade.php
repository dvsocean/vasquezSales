<!DOCTYPE HTML>
<html>
	<?php
	$signedIn = Auth::check();
	$user = Auth::user();
	$fpc = App\FrontPageContent::find(1);
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




				<!--PLACEHOLDER-->
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
				<!--PLACEHOLDER-->

				<section id="tiny" class="tinyslide">
					<aside class="slides">
						<figure> <img src="images/LA1.jpg" alt="">
							<figcaption><!--PLACEHOLDER--></figcaption>
						</figure>
						<figure> <img src="images/LA1.jpg" alt="">
							<figcaption><!--PLACEHOLDER--></figcaption>
						</figure>
						<figure> <img src="images/LA1.jpg" alt="">
							<figcaption><!--PLACEHOLDER--></figcaption>
						</figure>
						<figure> <img src="images/LA1.jpg" alt="">
							<figcaption><!--PLACEHOLDER--></figcaption>
						</figure>
					</aside>
				</section>
				<script> tiny = $('#tiny').tiny().data('api_tiny');</script>






				<!-- Wrapper -->
					<div id="wrapper">
						<!-- One -->
							<section id="one" class="main">
								<div class="inner spotlight style1">
									<div class="content">
										<header>
											<h2>{{$fpc->heading_one}}</h2>
										</header>
										<p>
											{{$fpc->body_one}}
										</p>
									</div>
									<!--
										Note: You can replace the image below with a JPEG or PNG. Just make sure it's exactly
										320x340 or at least the same aspect ratio (16:17).
									-->
									<span class="image"><img src="images/performance.png" alt="" /></span>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="main">
								<div class="inner spotlight alt style2">
									<div class="content">
										<header>
											<h2>{{$fpc->heading_two}}</h2>
										</header>
										<p>
											{{$fpc->body_two}}
										</p>
									</div>
									<!--
										Note: You can replace the image below with a JPEG or PNG. Just make sure it's exactly
										320x340 or at least the same aspect ratio (16:17).
									-->
									<span class="image"><img src="images/dollar.png" alt="" /></span>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="main">
								<div class="inner spotlight style3">
									<div class="content">
										<header>
											<h2>{{$fpc->heading_three}}</h2>
										</header>
										<p>
											{{$fpc->body_three}}
										</p>
									</div>
									<!--
										Note: You can replace the image below with a JPEG or PNG. Just make sure it's exactly
										320x340 or at least the same aspect ratio (16:17).
									-->
									<span class="image"><img src="images/repair.png" alt="" /></span>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="main special">
								<div class="inner">
									<header>
										<h2>{{$fpc->quad_title}}</h2>
									</header>
									<div class="features">
										<section>
											<span class="icon major fab fa-bluetooth style1"></span>
											<h3>{{$fpc->quad_heading_one}}</h3>
											<p>
												{{$fpc->quad_body_one}}
											</p>
										</section>
										<section>
											<span class="icon major fas fa-align-left style2"></span>
											<h3>{{$fpc->quad_heading_two}}</h3>
											<p>
												{{$fpc->quad_body_two}}
											</p>
										</section>
										<section>
											<span class="icon major fas fa-camera style3"></span>
											<h3>{{$fpc->quad_heading_three}}</h3>
											<p>
												{{$fpc->quad_body_three}}
											</p>
										</section>
										<section>
											<span class="icon major fas fa-calculator style4"></span>
											<h3>{{$fpc->quad_heading_four}}</h3>
											<p>
												{{$fpc->quad_body_four}}
											</p>
										</section>
									</div>
								</div>
							</section>

						<!-- CTA -->
							<section id="cta" class="main special">
								<div class="inner">
									<p>
										{{$fpc->footer_title}}
									</p>
									<ul class="actions vertical">
										<li><a href="#" class="button big">Learn More</a></li>
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