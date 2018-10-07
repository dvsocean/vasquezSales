<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 9/24/18
 * Time: 8:31 PM
 */
-->
<header id="header">
    @if($signedIn)
        <ul style="list-style-type: none">
            <li>
                <br>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                    ({{ucfirst($user->name)}}) Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    @else
        <a href="#" class="logo">Financing available <span>by VasquezSales</span></a>
    @endif
    <nav>
        <ul>
            <li><a href="#menu">Menu</a></li>
        </ul>
    </nav>
</header>




<!-- Sidebar menu -->
<nav id="menu">
    @if($signedIn)
        <ul class="links">
            @if($user->admin)
                <li>
                    <a href="{{route('admin')}}">Control Panel</a>
                </li>
                <br><br>
            @endif
            <li>
                <a href="{{route('homePage')}}">Home</a>
            </li>
            <li>
                <a href="{{route('profile')}}">{{$user->name}}'s Profile</a>
            </li>
            <li>
                <a href="#">Performance</a>
            </li>
            <li>
                <a href="#">Parts</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Financing</a>
            </li>
            <li>
                <a href="#">Contact us</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                    ({{ucfirst($user->name)}}) Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    @else
        <ul class="links">
            <li><a href="{{url('/login')}}">Login</a></li>
        </ul>
        <ul class="links">
            <li><a href="{{route('register')}}">Register</a></li>
        </ul>
    @endif
</nav>