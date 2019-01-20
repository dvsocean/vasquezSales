<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 1/19/19
 * Time: 8:00 PM
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
<title>Sales</title>
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
            <div class="col-md-12">
                <h1 class="text-center">Sales page</h1>
            </div>
        </div>
    </div>

    <!-- Wrapper -->
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @include('includes.info_message_flash_bar.index')

                    <p>
                        Need ideas on what to fill this with..Need ideas on what to fill this with..
                        Need ideas on what to fill this with..Need ideas on what to fill this with..
                        Need ideas on what to fill this with..Need ideas on what to fill this with..
                        Need ideas on what to fill this with..Need ideas on what to fill this with..
                        Need ideas on what to fill this with..Need ideas on what to fill this with..
                        Need ideas on what to fill this with..Need ideas on what to fill this with..
                    </p>

                </div>
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


