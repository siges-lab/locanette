<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> | Acceuil</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset("frontend/img/fav-icon.png")}}" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Persuit</title>

    <!-- Icon css link -->
    <link href="{{asset("public/frontend/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/vendors/line-icon/css/simple-line-icons.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/vendors/elegant-icon/style.css")}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset("public/frontend/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{asset("public/frontend/vendors/revolution/css/settings.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/vendors/revolution/css/layers.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/vendors/revolution/css/navigation.css")}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset("public/frontend/vendors/owl-carousel/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/vendors/bootstrap-selector/css/bootstrap-select.min.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/vendors/vertical-slider/css/jQuery.verticalCarousel.css")}}" rel="stylesheet">

    <link href="{{asset("public/frontend/css/style.css")}}" rel="stylesheet">
    <link href="{{asset("public/frontend/css/responsive.css")}}" rel="stylesheet">

    @yield("styles")

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home_sidebar">


<div class="home_box">
    @include('frontend.includes.header')
    @yield("content")
    @include('frontend.includes.footer')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset("public/frontend/js/jquery-3.2.1.min.js")}}"></script>
@yield("script")
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset("public/frontend/js/popper.min.js")}}"></script>
<script src="{{asset("public/frontend/js/bootstrap.min.js")}}"></script>

<!-- Rev slider js -->
<script src="{{asset("public/frontend/vendors/revolution/js/jquery.themepunch.tools.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.actions.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.video.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
<script src="{{asset("public//vendors/revolution/js/extensions/revolution.extension.navigation.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
<!-- Extra plugin css -->
<script src="{{asset("public/frontend/vendors/counterup/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/counterup/jquery.counterup.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/owl-carousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/bootstrap-selector/js/bootstrap-select.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/image-dropdown/jquery.dd.min.js")}}"></script>
<script src="{{asset("public/frontend/js/smoothscroll.js")}}"></script>
<script src="{{asset("public/frontend/vendors/isotope/imagesloaded.pkgd.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/isotope/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/magnify-popup/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("public/frontend/vendors/vertical-slider/js/jQuery.verticalCarousel.js")}}"></script>
<script src="{{asset("public/frontend/vendors/jquery-ui/jquery-ui.js")}}"></script>
<script src="{{asset("public/frontend/js/theme.js")}}"></script>
@yield("scripts")

</body>
</html>