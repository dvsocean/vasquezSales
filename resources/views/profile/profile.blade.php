<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 9/25/18
 * Time: 2:21 PM
 */
-->

<?php

use Illuminate\Support\Facades\Auth;
$signedIn = Auth::check();
$user = Auth::user();

?>

@if($signedIn)
<!DOCTYPE HTML>
<html>
<title>{{ucfirst($user->name)}}'s Profile</title>
<!--HEADER-->
@include('includes.header_footer.header')
<!--HEADER-->

<body>
<!-- Page Wrapper -->
<div id="page-wrapper">

<!--NAV-->
@include('includes.nav_menu.nav')
<!--NAV-->

    <!-- Wrapper -->
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @include('includes.info_message_flash_bar.index')
                    <h1 class="text-center">{{$user->name}}'s Profile</h1>
                </div>
            </div>

            @if($signedIn && $user->admin)
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <!--PLACEHOLDER-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <button id="home_page_button" class="btn btn-default">HOME</button>
                    <script>
                        $('#home_page_button').click(function () {
                            document.location = "/";
                        });
                    </script>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <button id="back_to_dashboard" class="btn btn-default">CTRL</button>
                    <script>
                        $('#back_to_dashboard').click(function () {
                            document.location = "/admin";
                        });
                    </script>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <button id="slideshow_button" class="btn btn-default">SLDS</button>
                    <script>
                        $('#slideshow_button').click(function () {
                            document.location = "/editSliders";
                        });
                    </script>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <button id="fpc" class="btn btn-default">FRPC</button>
                    <script>
                        $('#fpc').click(function () {
                            document.location = "/frontPageContent";
                        });
                    </script>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <button id="quad_content" class="btn btn-default">QCNT</button>
                    <script>
                        $('#quad_content').click(function () {
                            document.location = "/quad_content";
                        });
                    </script>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                    <button id="home_buttons_icons" class="btn btn-default">BTIC</button>
                    <script>
                        $('#home_buttons_icons').click(function () {
                            document.location = "/editButtons";
                        });
                    </script>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <!--PLACEHOLDER-->
                </div>
            </div>
            @endif
        </div>

        <div class="container">
            <form action="/updateProfile" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <!--PLACEHOLDER-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <img src="{{$user->photo ? "member_images/". $user->photo->file : 'PLACEHOLDERS/avatar.jpg'}}" height="200" width="200" class="img-circle">
                    <br>
                    <br>
                    <input type="file" name="profilePhoto"/>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <input type="hidden" value="{{$user->id}}" name="id">
                    <label>Name:</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                    <br>
                    <label>City:</label>
                    <input type="text" name="city" value="{{$user->city}}" class="form-control">
                    <br>
                    <label>Email:</label>
                    <input type="text" name="email" value="{{$user->email}}" class="form-control">
                    <br>
                    <label>Telephone:</label>
                    <input type="text" name="telephone" value="{{$user->telephone}}" class="form-control">
                    <br>
                    <input id="form-submit" type="submit" name="submit" value="Update" class="form-control">
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <!--PLACEHOLDER-->
                </div>
            </div>
            </form>
        </div>

        <!--SECTION 2-->
        <div class="container">
            <form action="/desired" method="POST">
                <input type="hidden" value="{{$user->id}}" name="user_id">
                {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="text-center">Desired equipment</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <p>
                        Express your attitude and lets us know what your looking for.
                        If need be, we can blow a nigga out his fuckin clothes, and we
                        can help you locate the rig that suites you and your needs. We
                        also know the secrets to obtaining funds and making your
                        desires a reality..a 12 gauge usually helps us out.
                    </p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Hardware:</label>
                    <input type="text" name="hardware" value="" placeholder="Make/model"/>
                    <br>
                    <label>Year:</label>
                    <input type="text" name="year" placeholder="Year"/>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Engine:</label>
                    <input type="text" name="engine" placeholder="Engine"/>
                    <br>
                    <label>Transmission:</label>
                    <input type="text" name="transmission" placeholder="Transmission"/>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <label>Accessories:</label>
                    <input type="text" name="extras" placeholder="Extras"/>
                    <br>
                    <label>Budget:</label>
                    <input type="text" name="budget" placeholder="$ Amount"/>

                    <br><br>

                    <input type="submit" value="Update" name="vasquez" class="form-control">
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <p>
                        Why? Because we know that starting a business can be a maze so let us
                        lead you through it since we've done it before. We also know how to blow
                        up cars. Plus, we support single moms :)
                        <br><br>
                        This text was me having a good time (assuming it will NOT end up in production).
                        But the overall layout of the profile page needs to be directed by you guys.
                    </p>
                </div>
            </div>
            </form>
        </div>

        <br>
    </div>
</div>

<!--FOOTER-->
@include('includes.header_footer.footer')
<!--FOOTER-->

</body>
</html>
@else
@include('includes.error_page.index')
@endif

