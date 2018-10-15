<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/5/18
 * Time: 12:07 PM
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
<title>Edit quad content</title>
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
    <h1 class="text-center">Edit quad content</h1>
    <br>

    <div class="container">
        <form action="/updateQuads" method="POST">
            {{ csrf_field() }}

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label>Quad title:</label>
                <input class="form-control" type="text" name="quad_title" value="{{!empty($fpc->quad_title) ? $fpc->quad_title : 'REPLACE THIS TEXT'}}"/><br>
                <br><br>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <!--PLACEHOLDER-->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label>Quad one:</label>
                <input class="form-control" type="text" name="quad_heading_one" placeholder="Enter heading" value="{{!empty($fpc->quad_heading_one) ? $fpc->quad_heading_one : 'REPLACE THIS TEXT'}}"/><br>
                <textarea class="form-control" name="quad_body_one" rows="7">{{!empty($fpc->quad_body_one) ? $fpc->quad_body_one : 'REPLACE THIS TEXT'}}</textarea>
                <br><br>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label>Quad two:</label>
                <input class="form-control" type="text" name="quad_heading_two" placeholder="Enter heading" value="{{!empty($fpc->quad_heading_two) ? $fpc->quad_heading_two : 'REPLACE THIS TEXT'}}"/><br>
                <textarea class="form-control" name="quad_body_two" rows="7">{{!empty($fpc->quad_body_two) ? $fpc->quad_body_two : 'REPLACE THIS TEXT'}}</textarea>
                <br><br>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label>Quad three:</label>
                <input class="form-control" type="text" name="quad_heading_three" placeholder="Enter heading" value="{{!empty($fpc->quad_heading_three) ? $fpc->quad_heading_three : 'REPLACE THIS TEXT'}}"/><br>
                <textarea class="form-control" name="quad_body_three" rows="7">{{!empty($fpc->quad_body_three) ? $fpc->quad_body_three : 'REPLACE THIS TEXT'}}</textarea>
                <br><br>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label>Quad four:</label>
                <input class="form-control" type="text" name="quad_heading_four" placeholder="Enter heading" value="{{!empty($fpc->quad_heading_four) ? $fpc->quad_heading_four : 'REPLACE THIS TEXT'}}"/><br>
                <textarea class="form-control" name="quad_body_four" rows="7">{{!empty($fpc->quad_body_four) ? $fpc->quad_body_four : 'REPLACE THIS TEXT'}}</textarea>
                <br><br>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label>Footer title:</label>
                <input type="text" name="footer_title" placeholder="Enter footer title" value="{{!empty($fpc->footer_title) ? $fpc->footer_title : 'REPLACE THIS TEXT'}}" class="form-control"/>
                <br><br>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <!--PLACEHOLDER-->
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <!--PLACEHOLDER-->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <input type="submit" name="submit" value="update" class="form-control"/>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
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
