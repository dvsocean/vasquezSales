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

@if($signedIn && $user->admin)
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
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <a href="{{route('homePage')}}" class="btn btn-default">Home</a>
                            <span> </span>
                            <a href="{{route('admin')}}" class="btn btn-default">Dashboard</a>
                            <br>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                            <br>
                            <!-- ERRORS ARRAY -->
                            @include('includes.info_message_flash_bar.errors_array')
                            <!-- ERRORS ARRAY -->
                        </div>

                        {{--<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">--}}
                            {{--<!--PLACEHOLDER-->--}}
                        {{--</div>--}}
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

