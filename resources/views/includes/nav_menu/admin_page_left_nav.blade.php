<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 10/4/18
 * Time: 4:47 PM
 */
-->
<style>
    #admin_nav {
        text-align: left;
    }

    #admin_ul {
        list-style-type: none;
    }
</style>


<nav id="admin_nav">
    <ul id="admin_ul">
        <li>
            <a href="{{route('front_page_content')}}">Front page content</a>
        </li>
        <li>
            <a href="{{route('quad_content')}}">Quad content</a>
        </li>
        <li>
            <a href="#">Button text</a>
        </li>
    </ul>
</nav>