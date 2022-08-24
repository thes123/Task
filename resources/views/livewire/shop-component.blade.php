
<!--main area-->
<main id="main" >
<div class="container">
    <div class="row">
        <div class="col-lg-16 col-md-16 col-sm-16 col-xs-16 main-content-area">
            <div class="row">
                <ul class="product-list grid-products equal-container">
                @foreach($products as $product)
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="{{$product->name}}">
                                    <figure><img src="{{asset('assets/images/products')}}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><span class="product-price">{{$product->regular_price}}</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                @endforeach 
                    <!-- <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_22.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_10.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_01.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_21.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_15.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_17.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_05.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_07.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_02.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_09.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{asset('assets/images/products/digital_06.jpg')}}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                <a href="#" class="btn add-to-cart">Add To Cart</a>
                            </div>
                        </div>
                    </li> -->

                </ul>

            </div>

           
        </div><!--end main products area-->
    </div><!--end row-->
</div><!--end container-->
</main>
<!--main area-->