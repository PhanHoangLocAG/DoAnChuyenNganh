<div class="list-product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3   style="text-transform: uppercase;font: 11px/18px Helvetica,Arial,'DejaVu Sans','Liberation Sans',Freesans,sans-serif;/* font-family: initial; */font-weight: bold;font-size:19px"><span>Sản phẩm bán chạy</span></h3>
                            <div class="list-product_arrow"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="kenne-element-carousel list-product_slider slider-nav" data-slick-options='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".list-product_arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":1200, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                            @foreach($sanpham as $item)
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="upload/img/{{$item->hinh}}" height="105" alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">-10%</span>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">{{$item->tensanpham}}</a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="new-price">{{number_format($item->giaban,0,"",".")."VND"}}</span>
                                                <span class="old-price">$50.99</span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart">Add to cart</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>