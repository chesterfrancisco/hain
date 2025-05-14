<div class="header-middle header-middle-ptb-1 d-none d-lg-block">
    <div class="container">
        <div class="header-wrap">
            <div class="logo logo-width-1">
                <a href="{{ route('home') }}"><img src="assets/imgs/hain-logo-RECT.png" alt="logo" style="width: 280px; min-width: 280px;"/></a>
            </div>
            <div class="header-right">
                <div class="search-style-2">
                    

                    <form action="#">
                        <select class="select-active">
                            <option value="0">All Categories</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        <input type="text" placeholder="Search for items..." />
                    </form>
                </div>
                <div class="header-action-right">
                    <div class="header-action-2">
                        
                        <!-- WISHLIST -->
                        <div class="header-action-icon-2">
                            <a href="@auth {{ route('wishlist') }} @else {{ route('login') }} @endauth">
                                <img class="svgInject" alt="Nest" src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}" />
                            </a>
                            <a href="@auth {{ route('wishlist') }} @else {{ route('login') }} @endauth">
                                <span class="lable">Wishlist</span>
                            </a>
                        </div>

                        <!-- CART -->
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="@auth {{ route('cart') }} @else {{ route('login') }} @endauth">
                                <img alt="Nest" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}" />
                            </a>
                            <a href="@auth {{ route('cart') }} @else {{ route('login') }} @endauth">
                                <span class="lable">Cart</span>
                            </a>
                        </div>

                        <!-- ACCOUNT -->
                        <div class="header-action-icon-2">
                           
                            @auth
                            <a href="#">
                                <img class="svgInject" alt="Nest" src="{{ asset('assets/imgs/theme/icons/icon-user.svg') }}" />
                            </a>
                            <a href="#">
                                <span class="lable ml-0">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                <ul>
                                    <li><a href="{{ route('account') }}"><i class="fi fi-rs-user mr-10"></i>My Account</a></li>
                                    <li><a href="{{ route('orders') }}"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a></li>
                                    <li><a href="{{ route('vouchers') }}"><i class="fi fi-rs-label mr-10"></i>My Voucher</a></li>
                                    <li><a href="{{ route('wishlist') }}"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a></li>
                                    <li>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form-bottom').submit();">
                                            <i class="fi fi-rs-sign-out mr-10"></i>Sign out
                                        </a>
                                        <form id="logout-form-bottom" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @endauth
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>