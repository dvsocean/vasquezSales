<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 9/25/18
 * Time: 2:21 PM
 */
-->
<?php
$signedIn = Auth::check();
$user = Auth::user();
?>

@if($signedIn)
<!DOCTYPE HTML>
<html>
<!--HEADER-->
@include('includes.profile_includes.header')
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
            <form action="#" method="#">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="text-center">{{$user->name}}'s Profile</h2>
                </div>
            </div>

            <br><br>

                <style>
                    #form-submit:hover{
                        color: #4c110f !important;
                        border-color: #4c110f !important;
                        box-shadow: 0 0 0 1px #4c110f !important;
                    }
                </style>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <!--PLACEHOLDER-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <img src="PLACEHOLDERS/avatar.jpg" height="200" width="200" class="img-circle">
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                    <br>
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control">
                    <br>
                    <label>Telephone:</label>
                    <input type="text" name="telephone" class="form-control">
                    <br>
                    <input id="form-submit" type="submit" name="submit" value="Update" class="form-control">

                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">

                </div>
            </div>
            </form>
        </div>


    </div>
</div>

<!--FOOTER-->
@include('includes.profile_includes.footer')
<!--FOOTER-->

</body>
</html>
@else
@include('includes.error_page.index')
@endif

