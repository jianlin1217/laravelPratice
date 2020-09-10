<html>
    <head>
        <title>App Name - @yield('title')</title>
        @push('styles')
        <link rel="stylesheet" href="{{asset()}}">
        @endpush
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
        <nav>
            <li>@yield('l1')</li>
            <li>@yield('l2')</li>
            <li>@yield('l3')</li>
            <li>@yield('l4')</li>
        </nav>
    </body>
</html>
