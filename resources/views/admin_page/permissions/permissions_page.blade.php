<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/21/18
 * Time: 11:22 AM
 */
-->
<?php
use Illuminate\Support\Facades\Auth;
$signedIn = Auth::check();
$user = Auth::user();
?>


@if($signedIn && $user->admin)
<!DOCTYPE HTML>
<html>
<title>Permissions</title>
<!--HEADER-->
@include('includes.header_footer.header')
<!--HEADER-->

<body>
<!-- Page Wrapper -->
<div id="page-wrapper">

    <!--NAV-->
@include('includes.nav_menu.nav')
<!--NAV-->

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <h1 class="text-center">Permission settings</h1>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <!--PLACEHOLDER-->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <!--PLACEHOLDER-->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <!--PLACEHOLDER-->
            </div>
        </div>
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
