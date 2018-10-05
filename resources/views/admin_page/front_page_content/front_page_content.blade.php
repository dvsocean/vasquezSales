<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/4/18
 * Time: 4:52 PM
 */
-->
<?php
use Illuminate\Support\Facades\Auth;

$signedIn = Auth::check();
$user = Auth::user();
//$front_page_content = FrontPageContent::all();
?>

@if($signedIn)
    <!DOCTYPE HTML>
    <html>
        <title>Front Page Content</title>
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
            <h1 class="text-center">Edit the front page content</h1>

            <div class="text-center">

                <div class="container">
                    <form action="/front_page_content" method="POST">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <h3>Performance and accessories</h3>
                            <textarea name="performance" class="form-control" rows="7" cols="7">{{}}</textarea>
                            <br>
                            <input type="submit" value="submit" class="form-control">
                        </div>
                        <br><br><br><br>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <h3>Financing</h3>
                            <textarea class="form-control" rows="7" cols="7"></textarea>
                            <br>
                            {{--<input type="submit" value="submit" class="form-control">--}}
                        </div>
                        <br><br><br><br>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <h3>Service and Repair</h3>
                            <textarea class="form-control" rows="7" cols="7"></textarea>
                            <br>
                            {{--<input type="submit" value="submit" class="form-control">--}}
                        </div>
                        <br><br>
                    </div>
                    </form>
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

