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
    <br>
    <h1 class="text-center">Edit slider images</h1>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form action="/updateSliderImages" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>First image:</h3>
                    <img src="{{$tiny->tiny_one}}" height="200" width="250" class="img-rounded"/><br>
                    <input type="file" name="tinyOne" /><br>
                    <input type="submit" name="tiny_one_submit" value="apply"/>
                </form>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form action="/updateSliderImages" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Second image:</h3>
                    <img src="{{$tiny->tiny_two}}" height="200" width="250" class="img-rounded"/><br>
                    <input type="file" name="tinyTwo" /><br>
                    <input type="submit" name="tiny_two_submit" value="apply"/>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form action="/updateSliderImages" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Third image:</h3>
                    <img src="{{$tiny->tiny_three}}" height="200" width="250" class="img-rounded"/><br>
                    <input type="file" name="tinyThree" /><br>
                    <input type="submit" name="tiny_three_submit" value="apply"/>
                </form>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <form action="/updateSliderImages" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Fourth image:</h3>
                    <img src="{{$tiny->tiny_four}}" height="200" width="250" class="img-rounded"/><br>
                    <input type="file" name="tinyFour" /><br>
                    <input type="submit" name="tiny_four_submit" value="apply"/>
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
