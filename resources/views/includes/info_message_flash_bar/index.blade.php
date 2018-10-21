<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/5/18
 * Time: 12:01 PM
 */
-->
@if (Session::has('message'))
    <div class="alert alert-info text-center">{{ Session::get('message') }}</div>
@elseif(Session::has('error_message'))
    <div class="alert alert-danger text-center">{{ Session::get('error_message') }}</div>
@endif


