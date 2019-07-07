@foreach($rooms as $room )
    <div class="item room ">
        <div class="l_product_item">
            <div class="l_p_img">
                <img src="{{asset('pictures'.$room->product->first()->product_pictures->first()->link)}}" alt="">
                <h5 class="new">New</h5>
            </div>
            <div class="l_p_text">
                <ul>
                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                    <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                </ul>
                <h4>{{$room->name}}</h4>
                <h5> {{$room->product->rental_price}} CFA</h5>
            </div>
        </div>


        <div class="l_product_item equipement bags">
            <div class="l_p_img">
                <img src="{{asset('public/frontend/img/product/fillter-product/f-product-11.jpg')}}" alt="">
                <h5 class="new">New</h5>
            </div>
            <div class="l_p_text">
                <ul>
                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                    <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                </ul>
                <h4>Oxford Shirt</h4>
                <h5>$85.50</h5>
            </div>
        </div>
    </div>

@endforeach