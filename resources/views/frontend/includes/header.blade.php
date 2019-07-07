
<?php
//Events equipments categories
$equipments = \App\EventEquipment::where('visible','1')->get();
$event_cats =[];
$c=0;
foreach ($equipments as $equipment){
    $event_cats[$c] = $equipment->product->product_category;
    $c++;
}
//Spaces and rooms categories
$spaces = \App\Space::where('visible','1')->get();
$space_cats =[];
$c=0;
foreach ($spaces as $space){
    $space_cats[$c] = $space->product->product_category;
    $c++;
}
$rooms = \App\Room::where('visible','1')->get();
$room_cats =[];
$c=0;
foreach ($rooms as $room){
    $room_cats[$c] = $room->product->product_category;
    $c++;
}
//Tools categories
$tools = \App\ProfessionalTool::where('visible','1')->get();
$tool_cats =[];
$c=0;
foreach ($tools as $tool){
    $tool_cats[$c] = $tool->product->product_category;
    $c++;
}
//Vehicles categories
$vehicles = \App\Vehicle::where('visible','1')->get();
$vehicle_cats =[];
$c=0;
foreach ($vehicles as $vehicle){
    $vehicle_cats[$c] = $vehicle->product->product_category;
    $c++;
}
//Providers categories
$providers = \App\Provider::where('visible','1')->get();
$provider_cats =[];
$c=0;
foreach ($providers as $provider){
    $provider_cats[$c] = $provider->product->product_category;
    $c++;
}

?>

<!--================Menu Area =================-->
<header class="shop_header_area carousel_menu_area" data-th-fragment="master-header">
    <div class="carousel_top_header black_top_header row m0">
        <div class="container">
            <div class="carousel_top_h_inner">
                <div class="float-md-left">
                    <div class="top_header_left">
                        <div class="selector">
                            <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                            </select>
                        </div>
                        <select class="selectpicker usd_select">
                            <option>USD</option>
                            <option>$</option>
                            <option>$</option>
                        </select>
                    </div>
                </div>
                <div class="float-md-right">
                    <div class="top_header_middle">
                        <a href="#"><i class="fa fa-phone"></i> Call Us: <span style="color: #ffffff">+225 57 71 53 86</span></a>
                        <a href="#"><i class="fa fa-envelope"></i> Email: <span style="color: #ffffff">support@locanette.ci</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel_menu_inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset("public/frontend/img/logo.png")}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown submenu active">
                            <a style="text-transform: none;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Matériels de reception <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($event_cats as $event_cat)
                                    <li class="nav-item"><a class="nav-link" href="{{url('get-category/'.$event_cat->id)}}">{{$event_cat->label}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a  style="text-transform: none;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Espaces/Salles <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($space_cats as $space_cat)
                                    <li class="nav-item"><a class="nav-link" href="{{url('get-category/'.$space_cat->id)}}">{{$space_cat->label}}</a></li>
                                @endforeach
                                @foreach($room_cats as $room_cat)
                                    <li class="nav-item"><a class="nav-link" href="{{url('get-category/'.$room_cat->id)}}l">{{$room_cat->label}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a  style="text-transform: none;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Outils Pro <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($tool_cats as $tool_cat)
                                    <li class="nav-item"><a class="nav-link" href="{{url('get-category/'.$tool_cat->id)}}">{{$tool_cat->label}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a  style="text-transform: none;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Véhicules <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($vehicle_cats as $vehicle_cat)
                                    <li class="nav-item"><a class="nav-link" href="{{url('get-category/'.$vehicle_cat->id)}}">{{$vehicle_cat->label}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a  style="text-transform: none;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Prestataire <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($provider_cats as $provider_cat)
                                    <li class="nav-item"><a class="nav-link" href="{{url('get-category/'.$provider_cat->id)}}">{{$provider_cat->label}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">

                        <li class="user_icon"><a href="#"><i class="icon-user icons"></i></a></li>
                        <li class="cart_cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================End Menu Area =================-->