<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/20/18
 * Time: 11:25 AM
 */
-->
<?php
//use Illuminate\Support\Facades\Auth;
//$signedIn = Auth::check();
//$user = Auth::user();
//?>

{{--@if($signedIn)--}}
<!DOCTYPE HTML>
<html>
<title>Oops file too big</title>
<!--HEADER-->
@include('includes.header_footer.header')
<!--HEADER-->

<body>
<!-- Page Wrapper -->
<div id="page-wrapper">

    <h1 class="text-center">Your image is too large!</h1>
    <h3 class="text-center">Displaying it would cause instability within this application. Please choose a smaller one.</h3>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="images/freakout.png" class="img-responsive">
                <button id="try_again" class="form-control">Try again</button>
                <script>
                    $('#try_again').click(function(){
                        document.location = "/editSliders";
                    });
                </script>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

            </div>
        </div>
    </div>
</div>

<!--FOOTER-->
@include('includes.header_footer.footer')
<!--FOOTER-->

</body>
</html>

