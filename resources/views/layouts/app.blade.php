<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>
    @include('layouts.partials.quickview-modal')
    <header class="header-area header-style-1 header-style-5 header-height-2">
        @include('layouts.partials.header-top')
        @include('layouts.partials.header-middle')
        @include('layouts.partials.header-bottom')
    </header>
    {{-- @include('layouts.partials.navbar') --}}
    
    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="assets/imgs/theme/loading.gif" alt="" />
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.scripts')
</body>
</html>
