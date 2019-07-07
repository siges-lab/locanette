@section('title')Acceuil @endsection
@section('styles')
    <style>
        .datepicker {
            z-index: 1151 !important;
        }
    </style>
@endsection
@extends('frontend.layouts.master')
@section('content')

    <div class="">

    </div>

<!--================Main Content Area =================-->
<section class="home_sidebar_area">
    <div class="container">
        <div class="row row_disable">
            <div class="col-lg-9 float-md-right">
                <div class="sidebar_main_content_area">
                    <form action="{{route('searchproduct')}}" method="post">
                    <div class="advanced_search_area">

                            {{csrf_field()}}

                        <select class="selectpicker">
                            <option value="0" >Toutes les categories</option>
                            <option value="1">Matériels de reception</option>
                            <option value="2">Outils pro</option>
                            <option value="3"> Vehicules</option>
                            <option value="4">Prestataire</option>
                        </select>
                        <div class="input-group">
                            <input type="text" class="form-control searchBox" id="searchdata" name="search" placeholder="Recherche rapide" aria-label="Search">
                            <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="submit"><i class="icon-magnifier icons"></i></button>

{{--                                            <ul class="list-group" id="result"></ul>--}}
                            </span>
                        </div>
                        <div class="row" >
                            <ul id="result" class="col-md-12">

                            </ul>
                        </div>

                    </div>
                    </form>
                    <div class="main_slider_area">
                        <div id="home_box_slider" class="rev_slider" data-version="5.3.1.6">
                            <ul>
                                <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/frontend/img/home-slider/slider-1.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{asset('public/frontend/img/home-slider/slider-2.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                                    <!-- LAYER NR. 1 -->
                                    <div class="slider_text_box first_text">
                                        <div class="tp-caption tp-resizeme first_text"
                                             data-x="['left','left','left','left','left','left']"
                                             data-hoffset="['60','60','60','60','20','0']"
                                             data-y="['top','top','top','top','top','top']"
                                             data-voffset="['70','70','70','70','70','70']"
                                             data-fontsize="['48','48','48','48','48','48']"
                                             data-lineheight="['56','56','56','56','56','48']"
                                             data-width="['none','none','none','none','none']"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-type="text"
                                             data-responsive_offset="on"
                                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                             data-textAlign="['left','left','left','left','left','left']"
                                        >Best Winter <br> Collection</div>

                                        <div class="tp-caption tp-resizeme secand_text"
                                             data-x="['left','left','left','left','left','left']"
                                             data-hoffset="['60','60','60','60','20','0']"
                                             data-y="['top','top','top','top']" data-voffset="['190','190','190','190','190','190']"
                                             data-fontsize="['14','14','14','14','14','14']"
                                             data-lineheight="['24','24','24','24','24']"
                                             data-width="['300','300','300','300','300']"
                                             data-height="none"
                                             data-whitespace="normal"
                                             data-type="text"
                                             data-responsive_offset="on"
                                             data-transform_idle="o:1;"
                                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                             data-textAlign="['left','left','left','left','left','left']"
                                        >There is no one who loves to be bread, who looks after it and wants to have it, simply because it is pain.
                                        </div>

                                        <div class="tp-caption tp-resizeme third_btn"
                                             data-x="['left','left','left','left','left','left']"
                                             data-hoffset="['60','60','60','60','20','0']"
                                             data-y="['top','top','top','top']" data-voffset="['290','290','290','290','290','290']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-type="text"
                                             data-responsive_offset="on"
                                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                             data-textAlign="['left','left','left','left','left','left']">
                                            <a class="checkout_btn" href="#">shop now</a>
                                        </div>
                                    </div>
                                </li>
                                <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{asset('public/frontend/img/home-slider/slider-2.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="{{asset('public/frontend/img/home-slider/slider-2.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="slider_text_box first_text">
                                        <div class="tp-caption tp-resizeme first_text"
                                             data-x="['left','left','left','left','left','left']"
                                             data-hoffset="['60','60','60','60','20','0']"
                                             data-y="['top','top','top','top','top','top']"
                                             data-voffset="['70','70','70','70','70','70']"
                                             data-fontsize="['48','48','48','48','48','48']"
                                             data-lineheight="['56','56','56','56','56','48']"
                                             data-width="['none','none','none','none','none']"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-type="text"
                                             data-responsive_offset="on"
                                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                             data-textAlign="['left','left','left','left','left','left']"
                                        >Best Winter <br> Collection</div>

                                        <div class="tp-caption tp-resizeme secand_text"
                                             data-x="['left','left','left','left','left','left']"
                                             data-hoffset="['60','60','60','60','20','0']"
                                             data-y="['top','top','top','top']" data-voffset="['190','190','190','190','190','190']"
                                             data-fontsize="['14','14','14','14','14','14']"
                                             data-lineheight="['24','24','24','24','24']"
                                             data-width="['300','300','300','300','300']"
                                             data-height="none"
                                             data-whitespace="normal"
                                             data-type="text"
                                             data-responsive_offset="on"
                                             data-transform_idle="o:1;"
                                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                             data-textAlign="['left','left','left','left','left','left']"
                                        >There is no one who loves to be bread, who looks after it and wants to have it, simply because it is pain.
                                        </div>

                                        <div class="tp-caption tp-resizeme third_btn"
                                             data-x="['left','left','left','left','left','left']"
                                             data-hoffset="['60','60','60','60','20','0']"
                                             data-y="['top','top','top','top']" data-voffset="['290','290','290','290','290','290']"
                                             data-width="none"
                                             data-height="none"
                                             data-whitespace="nowrap"
                                             data-type="text"
                                             data-responsive_offset="on"
                                             data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                             data-textAlign="['left','left','left','left','left','left']">
                                            <a class="checkout_btn" href="#">shop now</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="promotion_area">
                        <div class="feature_inner row m0">
                            <div class="left_promotion">
                                <div class="f_add_item">
                                    <div class="f_add_img"><img class="img-fluid" src="{{asset('public/frontend/img/feature-add/f-add-6.jpg')}}" alt=""></div>
                                    <div class="f_add_hover">
                                        <div class="sale">Sale</div>
                                        <h4>Best Summer <br />Collection</h4>
                                        <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="right_promotion">
                                <div class="f_add_item right_dir">
                                    <div class="f_add_img"><img class="img-fluid" src="{{asset('public/frontend/img/feature-add/f-add-7.jpg')}}" alt=""></div>
                                    <div class="f_add_hover">
                                        <div class="off">10% off</div>
                                        <h4>Best Summer <br />Collection</h4>
                                        <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fillter_home_sidebar">
                        <ul class="portfolio_filter">
                            <li class="active" data-filter="*"><a href="#">Nos Article</a></li>
                            <li data-filter=".equipement"><a href="#">Equipement</a></li>
                            <li data-filter=".room"><a href="#">Espace/Salles</a></li>
                            <li data-filter=".toolsprof"><a href="#">Outills Pro</a></li>
                            <li data-filter=".vehicule"><a href="#">Vehicules </a></li>
                            <li data-filter=".provider"><a href="#">Prestataire </a></li>
                        </ul>
                        <div class="home_l_product_slider owl-carousel">
                            <div class="item equipement ">
                                @foreach($eventEquipements as $eventEquipement )
                                    <div class="l_product_item">
                                        <div class="l_p_img">
                                            <img src="{{asset('public/pictures/products/'.$eventEquipement->product->first()->product_pictures->first()->link)}}" alt="">
                                            <h5 class="sale">Sale</h5>
                                        </div>
                                        <div class="l_p_text">

                                            <form action="{{route('cart.store')}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="{{$eventEquipement->product->id}}">
                                                <input type="hidden" name="designation"  value="{{$eventEquipement->product->designation}}">
                                                <input type="hidden" name="price" value="{{$eventEquipement->product->rental_price}}">
                                                <ul>
                                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                                <li> <button class="add_cart_btn" type="submit">Add To Cart</button></li>
                                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                            </ul>
                                            </form>
                                            <h4>{{$eventEquipement->designation}}</h4>
                                            <h5> {{$eventEquipement->product->rental_price}} CFA</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="item room ">
                                @foreach($rooms as $room )
                                    <div class="l_product_item">
                                        <div class="l_p_img">
                                            <img src="{{asset('public/pictures/products/'.$room->product->first()->product_pictures->first()->link)}}" alt="">
                                            <h5 class="sale">Sale</h5>
                                        </div>
                                        <div class="l_p_text">
                                            <form action="{{route('cart.store')}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="{{$room->product->id}}">
                                                <input type="hidden" name="designation"  value="{{$room->product->designation}}">
                                                <input type="hidden" name="price" value="{{$room->product->rental_price}}">
                                                <ul>
                                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                                    <li> <button class="add_cart_btn" type="submit">Add To Cart</button></li>
                                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                                </ul>
                                            </form>
                                            <h4>{{$room->name}}</h4>
                                            <h5> {{$room->product->rental_price}} CFA</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="item toolsprof ">
                                @foreach($toolspros as $toolspro )
                                    <div class="l_product_item">
                                        <div class="l_p_img">
                                            <img src="{{asset('public/pictures/products/'.$toolspro->product->first()->product_pictures->first()->link)}}" alt="">
                                            <h5 class="sale">Sale</h5>
                                        </div>
                                        <div class="l_p_text">
                                            <form action="{{route('cart.store')}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="{{$toolspro->product->id}}">
                                                <input type="hidden" name="designation"  value="{{$toolspro->product->designation}}">
                                                <input type="hidden" name="price" value="{{$toolspro->product->rental_price}}">
                                                <ul>
                                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                                    <li> <button class="add_cart_btn" type="submit">Add To Cart</button></li>
                                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                                </ul>
                                            </form>
                                            <h4>{{$toolspro->designation}}</h4>
                                            <h5> {{$toolspro->product->rental_price}} CFA</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="item vehicule ">
                                @foreach($vehicules as $vehicule )
                                    <div class="l_product_item">
                                        <div class="l_p_img">
                                            <img src="{{asset('public/pictures/products/'.$vehicule->product->first()->product_pictures->first()->link)}}" alt="">
                                            <h5 class="sale">Sale</h5>
                                        </div>
                                        <div class="l_p_text">
                                            <form action="{{route('cart.store')}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="{{$vehicule->product->id}}">
                                                <input type="hidden" name="designation"  value="{{$vehicule->product->designation}}">
                                                <input type="hidden" name="price" value="{{$vehicule->product->rental_price}}">
                                                <ul>
                                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                                    <li> <button class="add_cart_btn" type="submit">Add To Cart</button></li>
                                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                                </ul>
                                            </form>


                                            <h4>{{$vehicule->fuel_name}}</h4>
                                            <h5> {{$vehicule->product->rental_price}} CFA</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                            <div class="item provider ">
                                @foreach($providers as $provider )
                                    <div class="l_product_item">
                                        <div class="l_p_img">
                                            <img src="{{asset('public/pictures/products/'.$provider->product->first()->product_pictures->first()->link)}}" alt="">
                                            <h5 class="sale">Sale</h5>
                                        </div>
                                        <div class="l_p_text">
                                            <form action="{{route('cart.store')}}" method="POST">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="{{$provider->product->id}}">
                                                <input type="hidden" name="designation"  value="{{$provider->product->designation}}">
                                                <input type="hidden" name="price" value="{{$provider->product->rental_price}}">
                                                <ul>
                                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                                    <li> <button class="add_cart_btn" type="submit">Add To Cart</button></li>
                                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                                </ul>
                                            </form>
                                            <h4>{{$provider->name}}</h4>
                                            <h5> {{$provider->product->rental_price}} CFA</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>







                        </div>
                    </div>

                    <div class="home_sidebar_blog">
                        <h3 class="single_title">From The Blog</h3>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="from_blog_item">
                                    <img class="img-fluid" src="{{asset('public/frontend/img/blog/from-blog/f-blog-4.jpg')}}" alt="">
                                    <div class="f_blog_text">
                                        <h5>fashion</h5>
                                        <p>Neque porro quisquam est qui dolorem ipsum</p>
                                        <h6>21.09.2017</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="from_blog_item">
                                    <img class="img-fluid" src="{{asset('public/frontend/img/blog/from-blog/f-blog-5.jpg')}}" alt="">
                                    <div class="f_blog_text">
                                        <h5>fashion</h5>
                                        <p>Neque porro quisquam est qui dolorem ipsum</p>
                                        <h6>21.09.2017</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="from_blog_item">
                                    <img class="img-fluid" src="{{asset('public/frontend/img/blog/from-blog/f-blog-6.jpg')}}" alt="">
                                    <div class="f_blog_text">
                                        <h5>fashion</h5>
                                        <p>Neque porro quisquam est qui dolorem ipsum</p>
                                        <h6>21.09.2017</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 float-md-right">
                <div class="left_sidebar_area">
                    <aside class="l_widget l_categories_widget">
                        <div class="l_title">
                            <h3>categories</h3>
                        </div>
                        <ul>
                            <li><a href="{{url('get-sector/event')}}">Matériels de reception</a> </li>
                            <li><a href="{{url('get-sector/space')}}">Espaces & Salles </a> </li>
                            <li><a href="{{url('get-sector/tool')}}">Outils Pro</a> </li>
                            <li><a href="{{url('get-sector/vehicle')}}">Véhicules</a> </li>
                            <li><a href="{{url('get-sector/provider')}}">Prestataires</a></li>
                        </ul>
                    </aside>
                    <aside class="l_widget l_supper_widget">
                        <img class="img-fluid" src="{{asset('public/frontend/img/supper-add-1.jpg')}}" alt="">
                        <h4>Super Summer Collection</h4>
                    </aside>
                    <aside class="l_widget l_feature_widget">
                        <div class="verticalCarousel">
                            <div class="verticalCarouselHeader">
                                <div class="float-md-left">
                                    <h3>Featured Products</h3>
                                </div>
                                <div class="float-md-right">
                                    <a href="#" class="vc_goUp"><i class="arrow_carrot-left"></i></a>
                                    <a href="#" class="vc_goDown"><i class="arrow_carrot-right"></i></a>
                                </div>
                            </div>
                            <ul class="verticalCarouselGroup vc_list">
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('public/frontend/img/product/featured-product/f-p-1.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Oxford Shirt</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('public/frontend/img/product/featured-product/f-p-2.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Puffer Jacket</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('public/frontend/img/product/featured-product/f-p-3.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Leather Bag</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('public/frontend/img/product/featured-product/f-p-4.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Casual Shoes</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('public/frontend/img/product/featured-product/f-p-1.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Oxford Shirt</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('public/frontend/img/product/featured-product/f-p-2.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Puffer Jacket</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('public/frontend/img/product/featured-product/f-p-3.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Leather Bag</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('public/frontend/img/product/featured-product/f-p-4.jpg')}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Casual Shoes</h4>
                                            <h5>$45.05</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="l_widget l_news_widget">
                        <h3>newsletter</h3>
                        <p>Sign up for our Newsletter !</p>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="yourmail@domain.com" aria-label="Search for...">
                            <span class="input-group-btn">
                                            <button class="btn btn-secondary subs_btn" type="button">Subscribe</button>
                                        </span>
                        </div>
                    </aside>
                    <aside class="l_widget l_hot_widget">
                        <h3>Summer Hot Sale</h3>
                        <p>Premium 700 Product , Titles and Content Ideas</p>
                        <a class="discover_btn" href="#">shop now</a>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Main Content Area =================-->

<!--================World Wide Service Area =================-->
<section class="world_service">
    <div class="container">
        <div class="world_service_inner">
            <div class="row">
                <div class="col-lg-3">
                    <div class="world_service_item">
                        <h4><img src="{{asset('public/frontend/img/icon/world-icon-1.png')}}" alt="">Worldwide Service</h4>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="world_service_item">
                        <h4><img src="{{asset('public/frontend/img/icon/world-icon-2.png')}}" alt="">247 Help Center</h4>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="world_service_item">
                        <h4><img src="{{asset('public/frontend/img/icon/world-icon-3.png')}}" alt="">Safe Payment</h4>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="world_service_item">
                        <h4><img src="{{asset('public/frontend/img/icon/world-icon-4.png')}}" alt="">Quick Delivary</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End World Wide Service Area =================-->

@endsection
@section("script")
<script>
    $(function () {

        $result = $('#result') ;
        $result.html("")
        $(".searchBox").keyup(function () {
            var query = $(".searchBox").val();
            query  =  $.trim(query) ;
            var path = "{{ route('searchBox') }}";
            if(query.length > 2) {

                $.get(path, { query: query }, function (data) {
                    $('#result').html("");
                     if(data.length > 0)
                     {
                         for(var i = 0 ; i<data.length;i++)  {
                            console.log(data.length) ;

                             $.each(data[i],function (key,value) {
                                 console.log("erreur : ")
                                 console.log(value);

                                 if(value.designation) {
                                     $('#result').append('<li style="cursor: pointer" class="list-group-item" style="display: block; position: relative; z-index: 1"> '
                                         +value.designation  +
                                         '</li>');
                                 }
                                 if(value.name) {
                                     $('#result').append('<li style="cursor: pointer" class="list-group-item" style="display: block; position: relative; z-index: 1"> '
                                         +value.name  +
                                         '</li>');
                                 }
                                 if(value.localization) {
                                     $('#result').append('<li style="cursor: pointer" class="list-group-item" style="display: block; position: relative; z-index: 1"> '
                                         +value.localization  +
                                         '</li>');
                                 }



                             })
                         }
                     }
                });
            }
            else {
                $('#result').html("");
            }

        })


        $(document).on('click', 'li', function(){
            $('.searchBox').val($(this).text());
             $('#result').fadeOut();
        });
    })
</script>

<script>
  $(function () {
      @if(\Illuminate\Support\Facades\Session::has('message'))
      iziToast.show({
          title: 'Ajout au panier!',
          position: 'topCenter',
          color:"blue"
      });

      @endif
  })



</script>

@endsection