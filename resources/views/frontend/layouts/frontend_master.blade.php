<!DOCTYPE HTML>
<html lang="en">

{{-- frontend head include --}}
@include('frontend.layouts.partials.__frontend_head')

<body>

    {{-- frontend header include --}}
    @include('frontend.layouts.partials.__frontend_header')

    {{-- frontent contents  --}}
        @yield('frontend_contents')


    {{-- frontend footer include --}}
    @include('frontend.layouts.partials.__frontend_footer')

</body>

</html>
