<!-- resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        {{-- 取用父類別內容的用法，複雜不常用 --}}
        {{-- @section('sidebar')
            This is the master sidebar.
        @show --}}


        <h2>@yield('h2Name')</h2>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>