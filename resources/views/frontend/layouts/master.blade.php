<!DOCTYPE html>
<html lang="en">
    <head>
        @include('frontend.layouts.templates.head')
    </head>

    <body>
        @include('frontend.layouts.templates.preloader')
        @include('frontend.layouts.templates.header')
        @yield('content')
        @include('frontend.layouts.templates.scripts')
        @include('frontend.layouts.templates.footer')
    </body>
</html>
