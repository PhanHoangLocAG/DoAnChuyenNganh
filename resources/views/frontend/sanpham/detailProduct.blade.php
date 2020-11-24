@extends('frontend.layouts.index')

@section('content')
<div class="sp-area">
            <div class="container">
                <div class="sp-nav">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sp-img_area">
                                <div class="sp-img_slider slick-img-slider kenne-element-carousel" data-slick-options='{
                                "slidesToShow": 1,
                                "arrows": false,
                                "fade": true,
                                "draggable": false,
                                "swipe": false,
                                "asNavFor": ".sp-img_slider-nav"
                                }'>
                                    <?php
                                        $arr=explode(';',$sanpham[0]->hinh);
                                    ?>
                                    @foreach($arr as $item)
                                    <div class="single-slide red zoom">
                                        <img src="upload/img/{{$item}}" alt="Kenne's Product Thumnail">
                                    </div>
                                    @endforeach
                                </div>
                                <div class="sp-img_slider-nav slick-slider-nav kenne-element-carousel arrow-style-2 arrow-style-3" data-slick-options='{
                                "slidesToShow": 3,
                                "asNavFor": ".sp-img_slider",
                                "focusOnSelect": true,
                                "arrows" : true,
                                "spaceBetween": 30
                                }' data-slick-responsive='[
                                        {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                        {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                        {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                        {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                    ]'>
                                    @foreach($arr as $item)
                                    <div class="single-slide red">
                                        <img src="upload/img/{{$item}}" alt="Kenne's Product Thumnail">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="sp-content">
                                <div class="sp-heading">
                                    <h5><a href="#">{{$sanpham[0]->tensanpham}}</a></h5>
                                </div>
                                <span class="reference">Đánh giá</span>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li><i class="ion-android-star"></i></li>
                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                    </ul>
                                </div>
                                <div class="sp-essential_stuff">
                                    <ul>
                                        <li>Thương hiệu: <a href="javascript:void(0)">{{$sanpham[0]->loaisanpham}}</a></li>
                                        <li>Mã sản phẩm: <a href="javascript:void(0)">{{$sanpham[0]->masanpham}}</a></li>
                                        <li>Trạng thái: <a href="javascript:void(0)">
                                                @if($sanpham[0]->soluong>0)
                                                {{"Còn hàng"}}
                                                @else
                                                {{"Hết hàng"}}
                                                @endif
                                        </a></li>
                                        <li>Giá : <a href="javascript:void(0)">
                                            <span style="color:blue;font-weight: bold;font-size: larger;">
                                                    @if(is_null($sanpham[0]->Money_discount))
                                                        {{number_format($sanpham[0]->giaban,0,"",".")."VND"}}
                                                    @else
                                                        {{number_format($sanpham[0]->Money_discount,0,"",".")."VND"}}
                                                    @endif
                                            </span>
                                            @if(!is_null($sanpham[0]->Money_discount))
                                            <span style="text-decoration: line-through;color:red;">
                                                    
                                                    {{number_format($sanpham[0]->giaban,0,"",".")."VND"}}
                                            </span>
                                            @endif
                                        </a></li>
                                        <li>Màu sản phẩm :   <a href="javascript:void(0)" style="border:1px solid black;background-color:<?php 
                                                switch($sanpham[0]->mausac){
                                                        case "R":
                                                            echo "red";
                                                        break;
                                                        case "G":
                                                            echo "grey";
                                                        break;
                                                        case "B":
                                                            echo "black";
                                                        break;
                                                        case "W":
                                                            echo "white";
                                                        break;
                                                }
                                            ?>; padding-left:17px;" class="single-color" data-swatch-color="black"></a></li>
                                    </ul>
                                </div>
                                <div class="product-size_box" >
                                    <span>Kích thước</span>
                                    <select class="myniceselect nice-select">
                                        <option value="1">{{$sanpham[0]->kichthuoc}}</option>
                                    </select>
                                </div>
                                <div class="color-list_area">
                                    <span class="sub-title">Màu sắc</span>
                                    <div >
                                        
                                        @foreach($mausac as $item)
                                        
                                        <a  href="frontend/detailProduct/{{$item->masanpham}}" style="background-color:<?php 
                                                switch($item->mausac){
                                                        case "R":
                                                            echo "red";
                                                        break;
                                                        case "G":
                                                            echo "grey";
                                                        break;
                                                        case "B":
                                                            echo "black";
                                                        break;
                                                        case "W":
                                                            echo "white";
                                                        break;
                                                }
                                            ?>;width:20px;height:20px;border:1px solid black;margin-right:5px;padding-left: 17px;"  >
                                        </a>
                                        
                                        @endforeach
                                        
                                    </div>
                                </div>
                                <!-- <div class="quantity">
                                    <label>Đánh giá sản phẩm</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div> -->
                                <div class="qty-btn_area">
                                    <ul>
                                        <li><a class="qty-cart_btn"
                                        @if(isset($_COOKIE['cmnd']))
                                            href="frontend/add/{{$sanpham[0]->masanpham}}"
                                        @else
                                            href="frontend/dangnhap"
                                        @endif
                                         >Thêm vào giỏ hàng</a></li>
                                        <li><a class="qty-wishlist_btn"
                                            @if(isset($_COOKIE['cmnd']))
                                                href="frontend/themyeuthich/{{Cookie::get('cmnd')}}/{{$sanpham[0]->masanpham}}"
                                            @else
                                                href="frontend/dangnhap"
                                            @endif                                        
                                        data-toggle="tooltip" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection