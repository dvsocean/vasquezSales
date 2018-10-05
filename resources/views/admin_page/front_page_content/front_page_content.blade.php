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
$fpc = \App\FrontPageContent::find(1);
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
            <h1 class="text-center">Edit front page content</h1>

            <div class="text-center">
                <div class="container">
                    <form action="/front_page_content" method="POST">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <h3>Performance and accessories</h3>
                            <textarea name="performance" class="form-control" rows="7" cols="250">{{$fpc->performance}}</textarea>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <h3>Financing</h3>
                            <textarea name="finance" class="form-control" rows="7" cols="250">{{$fpc->finance}}</textarea>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <h3>Service and Repair</h3>
                            <textarea name="repair" class="form-control" rows="7" cols="250">{{$fpc->repair}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                           <!--PLACEHOLDER-->
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <input type="submit" value="Update all" class="form-control">
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <!--PLACEHOLDER-->
                        </div>
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

