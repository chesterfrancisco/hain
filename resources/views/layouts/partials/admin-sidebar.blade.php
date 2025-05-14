<aside class="navbar-aside" id="offcanvas_aside">
     <div class="aside-top">
                <a href="{{ route('admin.dashboard') }}" class="brand-wrap">
                    <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('assets/imgs/hain-logo-RECT.png') }}" alt="logo" style="width: 280px; min-width: 280px;"/></a>
                </a>
                <div>
                    <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
                </div>
            </div>
 
    <nav>
        @auth
            {{-- Admin and Vendor Dashboard --}}
            @if(Auth::user()->user_type === 'admin' || Auth::user()->user_type === 'vendor')
                <ul class="menu-aside">
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.dashboard') }}">
                            <i class="icon material-icons md-home"></i>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>

                    @if(Auth::user()->user_type === 'vendor' || Auth::user()->user_type === 'admin')
                        <li class="menu-item has-submenu">
                            <a class="menu-link" href="{{ route('admin.products') }}">
                                <i class="icon material-icons md-shopping_bag"></i>
                                <span class="text">Products</span>
                            </a>
                            <div class="submenu">
                                <a href="{{ route('admin.products') }}">Product List</a>
                                <a href="{{ route('admin.categories') }}">Categories</a>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('admin.orders') }}">
                                <i class="icon material-icons md-shopping_cart"></i>
                                <span class="text">Orders</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{ route('admin.vendors.profile', 3) }}">
                                <i class="icon material-icons md-store"></i>
                                <span class="text">Vendor Profile</span>
                            </a>
                        </li>
                    @endif
                </ul>
            @endif

            {{-- Rider Menus --}}
            @if(Auth::user()->user_type === 'rider' || Auth::user()->user_type === 'admin')
                <ul class="menu-aside">
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('rider.notifications') }}">
                            <i class="icon material-icons md-notifications"></i>
                            <span class="text">Order Notification</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('rider.pickup') }}">
                            <i class="icon material-icons md-local_shipping"></i>
                            <span class="text">Pickup</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('rider.delivery') }}">
                            <i class="icon material-icons md-directions_bike"></i>
                            <span class="text">Delivery Management</span>
                        </a>
                    </li>
                </ul>
            @endif

            {{-- Admin Only Menus --}}
            @if(Auth::user()->user_type === 'admin')
                <hr />
                <ul class="menu-aside">
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.vendors') }}">
                            <i class="icon material-icons md-people"></i>
                            <span class="text">Vendors</span>
                        </a>
                    </li>
                </ul>
            @endif
        @endauth

        <hr />

        {{-- Logout --}}
        <ul class="menu-aside">
            <li class="menu-item">
                <a class="menu-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <i class="icon material-icons md-exit_to_app"></i>
                    <span class="text">Log out</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
