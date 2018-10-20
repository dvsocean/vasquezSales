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
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <p>
                                        A minimum of 5 characters is required for the heading<br>
                                        A minimum of 10 characters is required for the body
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <label>Heading one:</label>
                            <input type="text" name="heading_one" placeholder="insert heading one" value="{{!empty($fpc->heading_one) ? $fpc->heading_one : 'REPLACE THIS TEXT'}}"/><br>
                            <textarea name="body_one" class="form-control" rows="7" cols="250">{{!empty($fpc->body_one) ? $fpc->body_one : 'REPLACE THIS TEXT'}}</textarea>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <label>Heading two:</label>
                            <input type="text" name="heading_two" placeholder="insert heading two" value="{{!empty($fpc->heading_two) ? $fpc->heading_two : 'REPLACE THIS TEXT'}}"/><br>
                            <textarea name="body_two" class="form-control" rows="7" cols="250">{{!empty($fpc->body_two) ? $fpc->body_two : 'REPLACE THIS TEXT'}}</textarea>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <br><br>
                            <label>Heading three:</label>
                            <input type="text" name="heading_three" placeholder="insert heading three" value="{{!empty($fpc->heading_three) ? $fpc->heading_three : 'REPLACE THIS TEXT'}}"/><br>
                            <textarea name="body_three" class="form-control" rows="7" cols="250">{{!empty($fpc->body_three) ? $fpc->body_three : 'REPLACE THIS TEXT'}}</textarea>
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

