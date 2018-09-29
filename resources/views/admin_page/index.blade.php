<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 9/28/18
 * Time: 4:15 PM
 */
-->

<?php
use Illuminate\Support\Facades\Auth;

$signedIn = Auth::check();
$user = Auth::user();
?>

<!DOCTYPE HTML>
<html>
<title>Administrator</title>
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
    <h1 class="text-center">Administrators Area</h1>
    <h2 class="text-center">control panel is optimized for {{ucfirst($user->name)}}</h2>


    <div class="text-center">
        <p>
            CONTENT PENDING..CONTENT PENDING..CONTENT PENDING..CONTENT PENDING..
        </p>
    </div>

</div>

<!--FOOTER-->
@include('includes.header_footer.footer')
<!--FOOTER-->


</body>
</html>