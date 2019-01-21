<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 1/19/19
 * Time: 8:00 PM
 */
 -->

<?php

use Illuminate\Support\Facades\Auth;
$signedIn = Auth::check();
$user = Auth::user();
?>

@if($signedIn)
        <!DOCTYPE HTML>
<html>
<title>Sales</title>
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
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Sales</h1>
            </div>
        </div>
    </div>

    <!-- Wrapper -->
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @include('includes.info_message_flash_bar.index')

                    <p>
                        Was thinking to make this page an overview page that would display all postings.
                        This would give the client an ability to make a selection on what to view.
                    </p>

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <table>
                                    <thead>
                                        <tr>
                                            <td>
                                                ID
                                            </td>
                                            <td>
                                                Product
                                            </td>
                                            <td>
                                                Description
                                            </td>
                                            <td>
                                                Price
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">52</a>
                                            </td>
                                            <td>
                                                Kenworth Commercial grade tow truck
                                            </td>
                                            <td>
                                                10 Speed, all comforts for the long haul
                                            </td>
                                            <td>
                                                $125,000
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
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


