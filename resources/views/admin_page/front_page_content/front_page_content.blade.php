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
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <!--PLACEHOLDER-->
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
                            <label>Main title:</label>
                            <input type="text" class="form-control" name="main_title" placeholder="Enter home page title" value="{{$fpc->main_title}}">
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                            <!--PLACEHOLDER-->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <label>Heading one:</label>
                            <input type="text" name="heading_one" placeholder="insert heading one" value="{{$fpc->heading_one}}"/><br>
                            <textarea name="body_one" class="form-control" rows="7" cols="250">{{$fpc->body_one}}</textarea>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <label>Heading two:</label>
                            <input type="text" name="heading_two" placeholder="insert heading two" value="{{$fpc->heading_two}}"/><br>
                            <textarea name="body_two" class="form-control" rows="7" cols="250">{{$fpc->body_two}}</textarea>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <label>Heading three:</label>
                            <input type="text" name="heading_three" placeholder="insert heading three" value="{{$fpc->heading_three}}"/><br>
                            <textarea name="body_three" class="form-control" rows="7" cols="250">{{$fpc->body_three}}</textarea>
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

