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
$bicons = \App\FrontpageBicons::find(1);
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
                <form action="/updateBicons" method="POST">
                    {{csrf_field()}}
                    <div class="well">
                        <label>Category button one:</label>
                        <input type="text" value="{{!empty($bicons->cat_button_one) ? $bicons->cat_button_one : 'Category one'}}" name="category_button_one">

                        <br><br>

                        <label>Category button two:</label>
                        <input type="text" value="{{!empty($bicons->cat_button_two) ? $bicons->cat_button_two : 'Category two'}}" name="category_button_two">

                        <br><br>

                        <label>Category button three:</label>
                        <input type="text" value="{{!empty($bicons->cat_button_three) ? $bicons->cat_button_three : 'Category three'}}" name="category_button_three">

                        <br><br>

                        <label>Category button four:</label>
                        <input type="text" value="{{!empty($bicons->cat_button_four) ? $bicons->cat_button_four : 'Category four'}}" name="category_button_four">

                        <br><br>

                        <label>Footer button text:</label>
                        <input type="text" value="{{!empty($bicons->footer_button) ? $bicons->footer_button : 'Footer button'}}" name="footer_button">
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
                        <img src="{{!empty($monitor->image_one) ? $monitor->image_one : 'images/default/performance.png'}}" height="100" width="100">
                        <input type="file" name="monitor_image_one"/>

                        <br><br><br>

                        <label>Monitor image 2:</label>
                        <img src="{{!empty($monitor->image_two) ? $monitor->image_two : 'images/default/dollar.png'}}" height="100" width="100">
                        <input type="file" name="monitor_image_two"/>

                        <br><br><br>

                        <label>Monitor image 3:</label>
                        <img src="{{!empty($monitor->image_three) ? $monitor->image_three : 'images/default/repair.png'}}" height="100" width="100">
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
                        <div class="select-wrapper">
                            <select id="quad_icon_one">
                                <option>BLA</option>
                                <option>MORE BLA</option>
                                <option>MOST BLA BLA</option>
                            </select>
                        </div>

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
