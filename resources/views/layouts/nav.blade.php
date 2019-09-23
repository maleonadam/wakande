<!-- Navbar -->
<div class="nav-icon">
    <a href="#" class="navicon"></a>
        <div class="toggle">
            <ul class="toggle-menu">
                <li><a class="active" href="/">Home</a></li>
                <li><a  href="/about">About Us</a></li>
                <li><a  href="/cart">Cart <span class="cart-count"><span>{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></span></a></li>
                @guest
                    <li><a  href="/login">Login</a></li>
                    <li><a  href="/register">Register</a></li>
                @else
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
                <li><a  href="/contacts">Contact Us</a></li>
            </ul>
        </div>
    <script>
    $('.navicon').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('navicon--active');
    $('.toggle').toggleClass('toggle--active');
    });
    </script>
</div>
<!-- // Navbar -->
