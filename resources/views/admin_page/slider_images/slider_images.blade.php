<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/7/18
 * Time: 1:57 PM
 */
-->
<?php
use Illuminate\Support\Facades\Auth;

$signedIn = Auth::check();
$user = Auth::user();
$tiny = App\TinyImages::find(1);

?>


@if($signedIn)
        <!DOCTYPE HTML>
<html>
<title>Edit slider images</title>
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
        <form action="/updateSliderImages" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

        <div class="row">
            <br><br>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <br>
                <a href="{{route('homePage')}}" class="btn btn-default">Home</a>
                <span> </span>
                <a href="{{route('admin')}}" class="btn btn-default">Dashboard</a>
                <br>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <h1 class="text-center">Edit slider images</h1>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <!--PLACEHOLDER-->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h3>First image:</h3>
                <img src="{{!empty($tiny->tiny_one) ? $tiny->tiny_one : 'tiny_images/WALT.jpg'}}" height="200" width="250" class="img-rounded"/><br>
                <input type="file" name="tinyOne" /><br>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h3>Second image:</h3>
                <img src="{{!empty($tiny->tiny_two) ? $tiny->tiny_two : 'tiny_images/WALT.jpg'}}" height="200" width="250" class="img-rounded"/><br>
                <input type="file" name="tinyTwo" /><br>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h3>Third image:</h3>
                <img src="{{!empty($tiny->tiny_three) ? $tiny->tiny_three : 'tiny_images/WALT.jpg'}}" height="200" width="250" class="img-rounded"/><br>
                <input type="file" name="tinyThree" /><br>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <br>
                <input type="submit" name="tiny_four_submit" value="apply" class="form-control"/>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <!--PLACEHOLDER-->
            </div>
        </div>
        </form>
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
