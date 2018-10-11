<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/10/18
 * Time: 7:53 PM
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
<title>Edit buttons</title>
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
    <h1 class="text-center">Edit buttons/icons</h1>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h3>Home page:</h3>
                <form action="#" method="POST">
                    <div class="well">
                        <label>Footer button text:</label>
                        <input type="text" name="footer_button" placeholder="Enter button text">
                    </div>
                    <input type="submit" name="submit" value="update" class="form-control">
                </form>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h3>Icons:</h3>
                <div class="well">
                    <p>Test text</p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h3>Contact page:</h3>
                <div class="well">
                    <p>Test text</p>
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
