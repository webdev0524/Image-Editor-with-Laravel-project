
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Picmomney">
    <!-- description -->
    <meta name="description" content="Picmomney">
    <!-- keywords -->
    <meta name="keywords" content="Picmomney">
    <!-- Page Title -->
    <title>Picmomney</title>
    <!-- Favicon -->
    <link href="{{asset('_landing/agency/img/favicon.ico')}}" rel="icon">
    <!-- Bundle -->
    <link href="{{asset('_landing/vendor/css/bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('_landing/vendor/css/revolution-settings.min.css')}}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{asset('_landing/vendor/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{asset('_landing/vendor/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('_landing/vendor/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{asset('_landing/vendor/css/cubeportfolio.min.css')}}" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="{{asset('_landing/agency/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body data-offset="90" data-spy="scroll" data-target=".navbar">
    <div class="cd-transition-layer visible opening">
    <div class="bg-layer"></div>
</div>
    <header class="cursor-light">
        @include('layout.header')
        @yield('header_content')
    </header>
    @yield('content')
    @include('layout.footer')

<script src="{{asset('_landing/vendor/js/bundle.min.js')}}"></script>
<!-- Plugin Js -->
<script src="{{asset('_landing/vendor/js/jquery.appear.js')}}"></script>
<script src="{{asset('_landing/vendor/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/swiper.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/morphext.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/TweenMax.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/wow.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/jquery.cubeportfolio.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{asset('_landing/vendor/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{asset('_landing/vendor/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('_landing/vendor/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
<script src="{{asset('_landing/agency/js/map.js')}}"></script>
<!-- custom script -->
<script src="{{asset('_landing/agency/js/script.js')}}"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@yield("page_scripts")
<script type="text/javascript">
    @if(session('failure'))
    toastr.error('{{session("failure")}}');
    @endif
    @if(session('success'))
    toastr.success('{{session("success")}}');
    @endif
</script>
</body>
</html>
