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
    <h1 class="text-center">Edit home page button text and icons</h1>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h3>Home page buttons:</h3>
                <form action="#" method="POST">
                    <div class="well">
                        <label>Category button one:</label>
                        <input type="text" name="category_button_one" placeholder="Enter button text">

                        <br><br>

                        <label>Category button two:</label>
                        <input type="text" name="category_button_two" placeholder="Enter button text">

                        <br><br>

                        <label>Category button three:</label>
                        <input type="text" name="category_button_three" placeholder="Enter button text">

                        <br><br>

                        <label>Category button four:</label>
                        <input type="text" name="category_button_four" placeholder="Enter button text">

                        <br><br>

                        <label>Footer button text:</label>
                        <input type="text" name="footer_button" placeholder="Enter button text">
                    </div>
                    <input type="submit" name="submit" value="update" class="form-control">
                </form>
                <br><br>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h3>Icons:</h3>
                <form action="#" method="POST"enctype="multipart/form-data">
                    <div class="well">
                        <label>Monitor image 1:</label>
                        <input type="file" name="monitor_image_one"/>

                        <br><br>

                        <label>Monitor image 2:</label>
                        <input type="file" name="monitor_image_two"/>

                        <br><br>

                        <label>Monitor image 3:</label>
                        <input type="file" name="monitor_image_three"/>
                    </div>
                    <input type="submit" name="submit" value="update" class="form-control">
                </form>
                <br><br>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h3>Quad icons(Font Awesome):</h3>
                <form action="#" method="POST">
                    <div class="well">
                        <label>Quad icon one:</label>
                        <input type="text" name="quad_icon_one" placeholder="enter icon name"/>

                        <br><br>

                        <label>Quad icon two:</label>
                        <input type="text" name="quad_icon_two" placeholder="enter icon name"/>

                        <br><br>

                        <label>Quad icon three:</label>
                        <input type="text" name="quad_icon_three" placeholder="enter icon name"/>

                        <br><br>

                        <label>Quad icon four:</label>
                        <input type="text" name="quad_icon_four" placeholder="enter icon name"/>
                    </div>
                    <input type="submit" name="submit" value="update" class="form-control">
                </form>
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
