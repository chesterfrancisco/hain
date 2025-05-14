<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
    <script src="{{ asset('backend/js/vendors/color-modes.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('backend/css/main.css?v=6.0') }}" />

</head>

<body>
    <div class="screen-overlay"></div>
    @include('layouts.partials.admin-sidebar')

    <main class="main-wrap">
        @include('layouts.partials.admin-header')     
        @yield('content')
    </main>

    @include('layouts.partials.admin-script')   
</body>
</html>
