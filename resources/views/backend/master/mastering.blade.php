@include('backend.includes.top')
<!-- Header Section Start -->
@include('backend.includes.header')
<!-- Header Section End -->

<!-- Side Header Start -->
@include('backend.includes.sidebar')
<!-- Side Header End -->



@yield('content')



<!-- Footer Section Start -->
@include('backend.includes.footer')
<!-- Footer Section End -->

<!--  ====================== JS ====================== -->
@include('backend.includes.scripts')