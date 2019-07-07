<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset("backend/assets/modules/bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("backend/assets/modules/fontawesome/css/all.min.css")}}">

    <link rel="stylesheet" href="{{asset("backend/assets/modules/dropzonejs/dropzone.css")}}">

    <link rel="stylesheet" href="{{asset("backend/assets/modules/izitoast/css/iziToast.min.css")}}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset("backend/assets/modules/jqvmap/dist/jqvmap.min.css")}}">
    <link rel="stylesheet" href="{{asset("backend/assets/modules/summernote/summernote-bs4.css")}}">
    <link rel="stylesheet" href="{{asset("backend/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("backend/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css")}}">
    <link href="{{asset('backend/assets/js/fileinput/jquery.fileuploader.css')}}" media="all" rel="stylesheet">
    <link href="{{asset('backend/assets/js/fileinput/jquery.fileuploader-theme-thumbnails.css')}}" media="all" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset("backend/assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("backend/assets/css/components.css")}}">
    <!-- Start GA -->
    @yield("styles")
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>



    <!-- /END GA --></head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
       @include("backend.includes.nav")
        @include("backend.includes.sidebar")

        <!-- Main Content -->
        <div class="main-content">
          @yield("content")
        </div>
       @include('backend.includes.footer')
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{asset("backend/assets/modules/jquery.min.js")}}"></script>
<script src="{{asset("backend/assets/modules/popper.js")}}"></script>
<script src="{{asset("backend/assets/modules/tooltip.js")}}"></script>
<script src="{{asset("backend/assets/modules/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("backend/assets/modules/nicescroll/jquery.nicescroll.min.js")}}"></script>
<script src="{{asset("backend/assets/modules/moment.min.js")}}"></script>
<script src="{{asset("backend/assets/js/stisla.js")}}"></script>
@yield("script")
<script src="{{asset("backend/assets/modules/dropzonejs/min/dropzone.min.js")}}"></script>

<script src="{{asset("backend/assets/js/page/components-multiple-upload.js")}}"></script>



<script src="{{asset('backend/assets/js/fileinput/jquery.fileuploader.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/js/fileinput/custom.js')}}"></script>
<script src="{{asset('backend/assets/js/fileinput/fileinput.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset("backend/assets/modules/jquery.sparkline.min.js")}}"></script>
<script src="{{asset("backend/assets/modules/chart.min.js")}}"></script>
<script src="{{asset("backend/assets/modules/owlcarousel2/dist/owl.carousel.min.js")}}"></script>
<script src="{{asset("backend/assets/modules/summernote/summernote-bs4.js")}}"></script>
<script src="{{asset("backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js")}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset("backend/assets/js/page/index.js")}}"></script>

<!-- JS Libraies -->
<script src="{{asset("backend/assets/modules/izitoast/js/iziToast.min.js")}}"></script>

<!-- Page Specific JS File -->
<script src="{{asset("backend/assets/js/page/modules-toastr.js")}}"></script>

<!-- Template JS File -->
<script src="{{asset("backend/assets/js/scripts.js")}}"></script>
<script src="{{asset("backend/assets/js/custom.js")}}"></script>
</body>
</html>