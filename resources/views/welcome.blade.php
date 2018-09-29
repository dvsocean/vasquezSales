<!DOCTYPE HTML>
<html>
	<?php
	$signedIn = Auth::check();
	$user = Auth::user();
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
					<section id="banner" data-video="">
						<div class="inner">
							<header>
								<h1>Tow Trucks 4 Sale</h1>
								@if($signedIn)
									<h2>Welcome {{$user->name}}</h2>
									@if($user->admin)
										<ul class="actions vertical">
											<li><a href="{{route('admin')}}" class="button big">Control Panel</a></li>
										</ul>
									@endif
								@endif
							</header>
							@if(!$signedIn)
								<p>Freightliner, Kenworth, Mack, Peterbuilt, Volvo, Hino, International</p>
								<ul class="actions vertical">
									<li><a href="{{route('register')}}" class="button big">Register</a></li>
									<li><a href="/login" class="button big">Login</a></li>
								</ul>
							@endif
						</div>
						<a href="#one" class="more">Learn More</a>
					</section>

				<!-- Wrapper -->
					<div id="wrapper">
						<!-- One -->
							<section id="one" class="main">
								<div class="inner spotlight style1">
									<div class="content">
										<header>
											<h2>Performance and accessories</h2>
										</header>
										<p>
											Make sure your new truck runs strong with dependable parts and the latest accessories.
											We have experience with CB radios, fifth wheels, hydraulics, compressors and much more.
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
											<h2>We provide financing</h2>
										</header>
										<p>
											Through a successful partnership with banks and finance companies, we are
											able to provide a viable solution that will enable you to own your truck.
											To speak to an agent contact us below and we will provide more information
											on how you can get started.
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
											<h2>Service & Repair</h2>
										</header>
										<p>
											Stay ahead of the curve by letting us handle maintenance and any required
											repairs. We have a knowledgeable team that can handle work around engine,
											transmission and frame. Body services are also available through a network
											of affiliated vendors.
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
										<h2>Many wrong roads but you finally found the right one</h2>
									</header>
									<div class="features">
										<section>
											<span class="icon major fab fa-bluetooth style1"></span>
											<h3>Equipped for the long haul</h3>
											<p>
												With modern technology enabling hands free operations
												you are free to tackle more work and not get stuck on
												confusing downtown roads.
											</p>
										</section>
										<section>
											<span class="icon major fas fa-align-left style2"></span>
											<h3>IFTA, DOT AUTH and REGISTRATION</h3>
											<p>
												We can help you with decals or identification for your truck.
												We have standard templates to choose from or if you have your
												own idea we can turn that into a decal.
											</p>
										</section>
										<section>
											<span class="icon major fas fa-camera style3"></span>
											<h3>Let us sell your truck</h3>
											<p>
												We can repair it, wash it and then photograph it, ultimately
												help you get top dollar when your ready to part with your truck.
											</p>
										</section>
										<section>
											<span class="icon major fas fa-calculator style4"></span>
											<h3>Were good at math</h3>
											<p>
												We can project your expenditures to help you gauge your budget.
												Many times buyers focus on cutting the cost without realizing how
												they cut their benefits.
											</p>
										</section>
									</div>
								</div>
							</section>

						<!-- CTA -->
							<section id="cta" class="main special">
								<div class="inner">
									<p>
										Life is a journey that must be traveled no matter how rough the road gets.<br>
										So do it comfortably.
									</p>
									<ul class="actions vertical">
										<li><a href="#" class="button special big">Get Started</a></li>
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