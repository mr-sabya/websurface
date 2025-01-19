<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/wv-font.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/aos.mini.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}" />
    <link rel="shortcut icon" href="img/fav.png" type="image/x-icon" />
    <title>WebVibe - Creative Digital Agency HTML Template</title>
    @livewireStyles
</head>

<body class="home-1">


    <!-- This Livewire component is used to render the example component on the frontend -->
    <livewire:frontend.theme.header />

    <!-- header -->

    <livewire:frontend.theme.sidebar />

    <div class="sidebar-overlay"></div>
    <!-- header -->


    @yield('content')

    <livewire:frontend.theme.footer />

    <div class="scroll_btn"><i class="far fa-long-arrow-up"></i></div>
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/query.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/aos.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    @livewireScripts
</body>

</html>