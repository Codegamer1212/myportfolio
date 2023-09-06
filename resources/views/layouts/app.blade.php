<!doctype html>

<html>

<head>
    @include('includes.head')
</head>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif


@include('includes.navbar')
@include('includes.headerContent')


   <div id="main">

           @yield('content')

   </div>
   @include('layout.footer')

   

</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>


</html>