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
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
                    <h2 class="text-center">Add posting</h2>

                    <form action="" method="" enctype="">
                        {{--dropdown--}}
                        <label>Item</label>
                        <div class="select-wrapper">
                            <select>
                                <option value="truck">Truck</option>
                                <option value="trailer">Trailer</option>
                                <option value="part">Part</option>
                                <option value="tool">Tool</option>
                                <option value="service">Service</option>
                            </select>
                        </div>

                        <br>
                        <label>Description</label>
                        <input type="text" class="form-control">

                        <br>
                        <label>Availablity</label>
                        <input type="text" class="form-control">
                    </form>
                </div>

                <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
                    <h2 class="text-center">Add image</h2>
                </div>

                <div class="col-xs-10 col-sm-10 col-md-4 col-lg-4">
                    <h2 class="text-center">Additionals</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-12 col-lg-12 align-right">
                    <input type="submit" value="Post">
                </div>
            </div>
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

