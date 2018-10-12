<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/11/18
 * Time: 8:48 PM
 */
-->
<?php
use Illuminate\Support\Facades\Auth;
$signedIn = Auth::check();
$user = Auth::user();
$bicons = \App\FrontpageBicons::find(1);
?>
<!DOCTYPE HTML>
<html>
<title>Lowbeds</title>
<!--HEADER-->
@include('includes.header_footer.header')
<!--HEADER-->

<body>
<!-- Page Wrapper -->
<div id="page-wrapper">

<!--NAV-->
@include('includes.nav_menu.nav')
<!--NAV-->
    <br>
    <h1 class="text-center">{{!empty($bicons->cat_button_three) ? $bicons->cat_button_three : 'Category three'}}</h1>

    <div class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <!--PLACEHOLDER-->
                </div>

                <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
                    <p>PENDING CONTENT</p>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <!--PLACEHOLDER-->
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

