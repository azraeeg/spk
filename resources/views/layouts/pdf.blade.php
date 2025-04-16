<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials._head')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
        @include('layouts.partials._script')
    </body>
</html>