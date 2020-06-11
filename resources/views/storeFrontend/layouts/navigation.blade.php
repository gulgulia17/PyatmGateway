<header class="header-section border-bottom">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="/">
                    <!-- <img src="img/logo.png" alt=""> -->
                    <h3 class="mb-0">E-Comm</h3>
                </a>
            </div>
            <div class="header-right">
                <a href="#">
                    <img src="img/icons/bag.png" alt="">
                    <span>2</span>
                </a>
            </div>
            <div class="user-access">
                @guest
                <a href="#">Register</a>
                <a href="#" class="in">Sign in</a>
                @endguest
                @auth
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endauth
            </div>
            <!-- <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./categories.html">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="product-page.html">Product Page</a></li>
                            <li><a href="shopping-cart.html">Shopping Card</a></li>
                            <li><a href="check-out.html">Check out</a></li>
                        </ul>
                    </li>
                    <li><a href="./product-page.html">About</a></li>
                    <li><a href="./check-out.html">Blog</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                </ul>
            </nav> -->
        </div>
    </div>
</header>

<!-- <div class="header-info">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="header-item">
                    <img src="img/icons/delivery.png" alt="">
                    <p>Free shipping on orders over $30 in USA</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-lg-center">
                <div class="header-item">
                    <img src="img/icons/voucher.png" alt="">
                    <p>20% Student Discount</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-xl-right">
                <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

{{-- <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('adminlogout') }}" method="POST" class="d-none">
                    @csrf
                </form> --}}