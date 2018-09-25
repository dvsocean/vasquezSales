<!DOCTYPE HTML>
<html>

	<!--HEADER-->
	@include('includes.auth_header.header')
	<!--HEADER-->

	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">
				<form role="form" action="{{ route('register') }}" method="post" class="registration-form">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">

						</div>

						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<div class="form-box">
								<div class="form-top">
									<div class="form-top-left">
										<h1 class="align-right">Sign Up</h1>
										<p><!--PLACEHOLDER--></p>
									</div>
									{{--<div class="align-right">--}}
										{{--<i class="fa fa-pencil"></i><br><br>--}}
									{{--</div>--}}
								</div>
								<div class="form-bottom">
										{{ csrf_field() }}
										<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

											<input type="text" name="name" placeholder="Name..." class="form-control" id="name" value="{{ old('name') }}" required autofocus>
											@if ($errors->has('name'))
												<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
											@endif
										</div>

										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<input type="text" name="email" placeholder="Email..." class="form-control" id="email" value="{{ old('email') }}" required>
											@if ($errors->has('email'))
												<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
											@endif
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<input type="password" name="password" placeholder="Password..." class="form-control" id="password" required>
											@if ($errors->has('password'))
												<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
											@endif
										</div>

										<div class="form-group">
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password..." required>
										</div>


								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<!--PLACEHOLDER-->
						</div>
					</div>

					<br><br>

					<div class="row">
						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<!--PLACEHOLDER-->
						</div>

						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 align-center">
							<button type="submit" class="btn">Register</button><br>
							<span>
								<a href="{{route('homePage')}}">Go Back</a>
							</span>
						</div>

						<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
							<!--PLACEHOLDER-->
						</div>
					</div>
				</div>
				</form>
			</div>

		<!--FOOTER-->
		@include('includes.auth_footer.footer')
		<!--FOOTER-->

	</body>



</html>