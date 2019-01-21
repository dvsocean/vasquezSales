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
                    <h2 class="text-center">Add details</h2>




                    <form action="" method="" enctype="">
                        <label>Item</label>
                        <div class="select-wrapper">
                            <select id="typeSelector" name="typeSelector">
                                <option value="na" selected>Select a type</option>
                                <option value="truck">Truck</option>
                                <option value="trailer">Trailer</option>
                                <option value="part">Part</option>
                                <option value="tool">Tool</option>
                                <option value="service">Service</option>

                                <script>
                                    $(function(){
                                        $('#typeSelector').change(function () {
                                            var type = $('#typeSelector').val();

                                            if(type === 'truck'){
                                                $('#nodeType').html("<h2 class='text-center'>Describe your truck</h2><br>" +
                                                    "<label>Truck make</label>" +
                                                    "<input type='text' name='truckMake' placeholder='Truck Make'>" +
                                                    "<br>" +
                                                    "<label>Year</label>" +
                                                    "<input type='text' name='truckYear' placeholder='Year'>");
                                            } else if(type === 'trailer') {
                                                $('#nodeType').html("<h2 class='text-center'>Describe your trailer</h2><br>" +
                                                    "<label>Trailer make</label>" +
                                                    "<input type='text' name='trailerMake' placeholder='Trailer Make'>" +
                                                    "<br>" +
                                                    "<label>Year</label>" +
                                                    "<input type='text' name='trailerYear' placeholder='Year'>");
                                            }
                                        });
                                    });
                                </script>
                            </select>
                        </div>




                        <br>
                        <div id="nodeType"></div>

                    </form>
                </div>

                <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8">
                    <h2 class="text-center">Add images</h2>
                    <br>
                    <form action="/file-upload" class="dropzone" id="my-awesome-dropzone" enctype="multipart/form-data">

                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-12 col-lg-12">
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

