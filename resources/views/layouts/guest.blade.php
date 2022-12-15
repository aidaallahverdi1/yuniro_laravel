<!doctype html>
<html lang="en">

<head>
    @include('layouts.guest.partials.head')

    <!-- doc from bootstrap italia -->
    <link href="https://italia.github.io/bootstrap-italia/docs/assets/dist/css/docs.min.css?202101280752" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap') }}" rel="stylesheet">
    
</head>

<body>
@include('layouts.guest.partials.preloader')
@include('layouts.guest.partials.leftNav')
@include('layouts.guest.partials.searchBox')
@include('layouts.guest.partials.wallet')
<div class="metaportal_fn_main">
    @include('layouts.guest.partials.mobileNav')
    @include('layouts.guest.partials.header')
    <div class="metaportal_fn_content">
        @yield('content')
        @include('layouts.guest.partials.footer')
    </div>
</div>
@include('layouts.guest.partials.social')
@include('layouts.guest.partials.totop')
@include('layouts.guest.partials.searchButt')
<!-- Scripts -->
<script type="text/javascript" src='{{ asset('js/jquery.js?ver=3.1') }}'></script>
<script type="text/javascript" src='{{ asset('js/plugins.js?ver=3.1') }}'></script>
<!--[if lt IE 10]><script type="text/javascript" src='{{ asset('js/ie8.js?ver=3.1') }}'></script><![endif]-->
<script type="text/javascript" src='{{ asset('js/init.js?ver=3.1') }}'></script>
<!-- !Scripts -->
@yield('js')
@stack('scripts')
</body>

</html>