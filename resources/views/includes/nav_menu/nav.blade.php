<!--
/**
 * Created by PhpStorm.
 * User: danielocean
 * Date: 9/24/18
 * Time: 8:31 PM
 */
-->
<header id="header">
    @if(Auth::check())
        <ul style="list-style-type: none">
            <li>
                <br>
                <a href="{{ route('logout') }}" id="logoutLink"
                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                    ({{ucfirst(Auth::user()->name)}}) Logout
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
    @if(Auth::user())
        <ul class="links">
            <li>
                <a href="#">Control Panel</a>
            </li>
        </ul>
    @endif

    @if(Auth::user())
        <ul class="links">
            <li>
                <a href="#">Truck Catalog</a>
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
                    ({{ucfirst(Auth::user()->name)}}) Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    @else
        <ul class="links">
            <li><a href="{{url('/contact')}}" class="button fit">Contact</a></li>
        </ul>
    @endif
</nav>