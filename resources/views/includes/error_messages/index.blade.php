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
@endif