@section('title')Mon panier @endsection
@section('styles')
    <style>
        .datepicker {
            z-index: 1151 !important;
        }
    </style>
@endsection
@extends('frontend.layouts.master')
@section('content')
    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <h3>shopping cart 02</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="shopping-cart2.html">Shopping cart 02</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================Shopping Cart Area =================-->
    <section class="shopping_cart_area p_100">
        <div class="row">
            <div class="col-md-12 offset-4">
                @if(session()->has('success_message'))
                <span class="alert alert-info"> {{session()->get("success_message")}} </span>
                @endif
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="cart_items">
                        <h3>Votre Panier</h3>
                        <div class="table-responsive-md">
                            <table class="table">
                                <tbody>

                                @forelse(\Gloudemans\Shoppingcart\Facades\Cart::content() as $items)

                                <tr>
                                    <th scope="row">

                                    </th>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">

                                                <img src="{{asset('public/pictures/products/'.$items->model->first()->product_pictures->first()->link)}}" height="50" width="60" alt="">


                                            </div>
                                            <div class="media-body">
                                                <h4><a href="{{route('getProduct',$items->id)}}">{{$items->model->designation}}</a></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td><p class="red">{{$items->price}} CFA</p></td>
                                    <td>
                                        <div class="quantity">
                                            <h6>Quantity</h6>
                                            <div class="custom">
                                                <button   onclick="var result = document.getElementById('sst{{$items->id}}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false; " data-id="{{$items->id}}" class="reduced decrement items-count" type="button"><i class="icon_minus-06"></i></button>
                                                <input type="text" data-rows="{{$items->rowId}}" name="qty" id="sst{{$items->id}}" maxlength="12" @if($items->qty) value="{{$items->qty}}"  @endif title="Quantity:" class="input-text qty">
                                                <button onclick="var result = document.getElementById('sst{{$items->id}}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase decrement items-count" type="button">
                                                    <i class="icon_plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{route('cart.destroy',$items->rowId)}}" method="POST" >
                                            {{csrf_field()}}
                                            {{method_field("DELETE")}}
                                            <button type="submit" class="text-danger"> <i class="fa fa-trash text-danger"></i> </button>
                                        </form>

                                    </td>
                                </tr>

                                    @empty
                                    <div class="row">
                                        <div class="col-md-12 text-center ">
                                               <span class="text-info"> <h3> Votre panier est vide </h3> </span>
                                        </div>
                                    </div>

                               @endforelse


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart_totals_area">
                        <h4> Total</h4>
                        <div class="cart_t_list">
                            <div class="media">
                                <div class="d-flex">
                                    <h5>quantite</h5>
                                </div>
                                <div class="media-body">
                                    <h6> <span id="qtycart">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span> </h6>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <h5>Sous Total</h5>
                                </div>
                                <div class="media-body">
                                    <h6><span id="soustotalcart">{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} </span> CFA</h6>
                                </div>
                            </div>


                        </div>
                        <div class="total_amount row m0 row_disable">
                            <div class="float-left">
                                Total
                            </div>
                            <div class="float-right">
                                <span id="totalcart">{{\Gloudemans\Shoppingcart\Facades\Cart::total()}}</span> CFA
                            </div>
                        </div>
                    </div>
                    <button type="submit" value="submit" class="btn subs_btn form-control">Proceed to checkout</button>
                </div>
            </div>
        </div>
    </section>
    <!--================End Shopping Cart Area =================-->
@endsection

@section("script")
    <script>
        $(function () {

            var path = "{{ route('cart.update') }}";

            $('.decrement').on('click',function () {

               $val =  $(this).parent().find('input').val() ;
               $rowsId =  $(this).parent().find('input').attr("data-rows");
                $.get(path, { rowId: $rowsId , quantity : $val}, function (data) {

                    $("#soustotalcart").html(data.subtotal);
                    $("#totalcart").html(data.total);
                    $("#qtycart").html(data.count);
                   console.log(data) ;
                });

            }) ;

            $('.input-text').on("keyup",function () {
                $val = $(this).val() ;
                $rowsId = $(this).attr('data-rows') ;
                $.get(path, { rowId: $rowsId , quantity : $val}, function (data) {

                    $("#soustotalcart").html(data.subtotal);
                    $("#totalcart").html(data.total);
                    $("#qtycart").html(data.count);
                    console.log(data) ;
                });
            })
        })
    </script>
@endsection

