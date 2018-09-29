<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 9/24/18
 * Time: 8:17 PM
 */
-->
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login</title>
        @include('includes.header_footer.header')
        <!--HEADER-->
    </head>

    <body>

    <div class="page-wrapper">
        <!-- Top content -->
        <div class="container">
            <div class="row" align="center">
                <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3">
                    <!--PLACEHOLDER-->
                </div>

                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <br><br><br>
                                <h1>Login</h1>
                                <p>Enter username and password:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>

                        <div class="form-bottom">
                            <form role="form" action="{{ url('/login') }}" method="post" class="login-form">
                                {{ csrf_field() }}

                                <div class="form-group ">
                                    <label class="sr-only" for="form-username">Email</label>
                                    <input type="text" name="email" placeholder="Email..." class="danika-control form-control" id="{{ $errors->has('email') ? ' has-error' : '' }}" value="{{ old('email') }}" autofocus>
                                    @if ($errors->has('email'))
                                        <span class="danika_errors">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div class="form-group ">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Password..." class="danika-control form-control" id="{{ $errors->has('password') ? ' has-error' : '' }}">
                                    @if ($errors->has('password'))
                                        <span class="danika_errors">
                                               <strong>{{ $errors->first('password') }}</strong>
                                           </span>
                                    @endif
                                </div>

                                <br><br>

                                <button type="submit" class="btn">Sign in</button>
                                <br><br>
                                <a href="{{route('homePage')}}" id="nevermind" class="btn">Nevermind</a>
                            </form>
                        </div>
                    </div>

                    <style>
                        button {
                            text-decoration: none !important;
                        }
                    </style>

                    <div class="col-xs-12 col-sm-2 col-md-3 col-lg-3">
                        <!--PLACEHOLDER-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->

    <!--FOOTER-->

    </div>
    </body>

</html>
