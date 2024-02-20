<!DOCTYPE html>
<html lang="en">

<head>

    <!----------Meta Information---------->
    @include('frontend.partials.meta')

    <!-----------Stylesheets------------>
    @include('frontend.partials.css')

</head>

<body>



        @include('frontend.partials.header')

        @yield('page.content')

        @include('frontend.partials.footer')


    <!--javascript-->
    @include('frontend.partials.js')

    @yield('page.scripts')
    @yield('component.scripts')

</body>

</html>