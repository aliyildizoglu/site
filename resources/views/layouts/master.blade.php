<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','Anasayfa' )</title>
    @include('layouts.partials.head')

</head>
<body>

<div class="site-wrap">
    <header class="site-navbar" role="banner">
        @include('layouts.partials.navbar')
    </header>

   @yield('content')








  @include('layouts.partials.footer')
</div>

<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
