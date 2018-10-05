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
            <form action="/updateProfile" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @if (Session::has('message'))
                        <div class="alert alert-info text-center">{{ Session::get('message') }}</div><br>
                    @endif
                    <h1 class="text-center">{{$user->name}}'s Profile</h1>
                </div>
            </div>

            <br><br>

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
                        also know the secrets to obtaining the funds and making your
                        desires a reality..a 12 gauge might help us out.
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

