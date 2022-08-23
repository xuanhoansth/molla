<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('admin.includes.head')
@include('sweetalert::alert')
<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper">
@include('admin.includes.header')
@include('admin.includes.left-slidebar')
@yield('content')
@include('admin.includes.footer')
</div>
@include('admin.includes.js')
</body>
</html>
