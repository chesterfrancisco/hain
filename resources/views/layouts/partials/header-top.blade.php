<div class="header-top header-top-ptb-1 d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-4">
                <div class="header-info">
                    <!--<ul>
                        <li><a href="page-about.htlm">About Us</a></li>
                        <li><a href="page-account.html">My Account</a></li>
                        <li><a href="shop-wishlist.html">Wishlist</a></li>
                        <li><a href="shop-order.html">Order Tracking</a></li>
                    </ul>-->
                </div>
            </div>
            <div class="col-xl-6 col-lg-4">
                <div class="text-center">
                    <div id="news-flash" class="d-inline-block">
                        <!--<ul>
                            <li>100% Secure delivery without contacting the courier</li>
                            <li>Supper Value Deals - Save more with coupons</li>
                            <li>Trendy 25silver jewelry, save up 35% off today</li>
                        </ul>-->
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="header-info header-info-right">
                    <ul>
                        @auth
                            <li>
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Sign in</a></li>
                        @endauth
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-header-active mobile-header-wrapper-style">
<div class="mobile-header-wrapper-inner">
    <div class="mobile-header-top">
        <div class="mobile-header-logo">
            <a href="{{ route('home') }}"><img src="assets/imgs/hain-logo-RECT.png" alt="logo" style="width: 280px; min-width: 280px;"/></a>
        </div>
        <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
            <button class="close-style search-close">
                <i class="icon-top"></i>
                <i class="icon-bottom"></i>
            </button>
        </div>
    </div>
    <div class="mobile-header-content-area">
        <div class="mobile-search search-style-3 mobile-header-border">
            <form action="#">
                <input type="text" placeholder="Search for items…" />
                <button type="submit"><i class="fi-rs-search"></i></button>
            </form>
        </div>
        <div class="mobile-menu-wrap mobile-header-border">
            <!-- mobile menu start -->
            <nav>
                <ul class="mobile-menu font-heading">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="shop-grid-right.html">Shop</a>
                    </li>
                    <li>
                        <a href="#">Vendors</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Other Pages</a>
                        <ul class="dropdown">
                            <li><a href="page-about.html">About Us</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                            <li><a href="page-account.html">My Account</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- mobile menu end -->
        </div>
        <div class="mobile-header-info-wrap">
            <div class="single-mobile-header-info">
                <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
            </div>
            <div class="single-mobile-header-info">
                <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
            </div>
            <div class="single-mobile-header-info">
                <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
            </div>
        </div>
        <div class="mobile-social-icon mb-50">
            <h6 class="mb-15">Follow Us</h6>
            <a href="#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
            <a href="#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
            <a href="#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
            <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
            <a href="#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
        </div>
        <div class="site-copyright">Copyright 2025 © Hain Express. All rights reserved.</div>
    </div>
</div>
</div>
<!--End header-->