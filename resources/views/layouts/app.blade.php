<!doctype>
<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}"></script>
    @push('scripts')
        <script src="/example.js"></script>
    @endpush
</head>
<body>
    <div class="container-fluid px-0">
        @yield('nav')
        @yield('corousel')
        @yield('promo-cards')
    </div>
    @section('sidebar')
        This is the master sidebar.
    @show

    <div class="container">
        @yield('content')
    </div>
    <!-- <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script>
        new Masonry( '.cards-grid', {
            itemSelector: '.grid-item-js',
            columnWidth: 100,
            percentPosition: true
        });
    </script> -->
</body>
</html>

