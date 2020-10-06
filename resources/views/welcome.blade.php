@extends('layouts.frontend.app')

@section('title','HOME')

@push('css')
@endpush

@section('content')
    <div class="index">
        <div class="mainbanner">
            <div id="main-banner" class="owl-carousel home-slider">
                <div class="item"> <a href="#"><img src="{{ asset('assets/frontend/image/banners/Main-Banner1.jpg') }}" alt="main-banner1" class="img-responsive" /></a> </div>
                <div class="item"> <a href="#"><img src="{{ asset('assets/frontend/image/banners/Main-Banner2.jpg') }}" alt="main-banner2" class="img-responsive" /></a> </div>
                <div class="item"> <a href="#"><img src="{{ asset('assets/frontend/image/banners/Main-Banner3.jpg') }}" alt="main-banner3" class="img-responsive" /></a> </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="cms_banner">
                    <div class="col-xs-12 col-md-6">
                        <div id="subbanner1" class="banner sub-hover">
                            <a href="{{ route('cat.woman') }}"><img src="{{ asset('assets/frontend/image/banners/subbanner1.jpg') }}" alt="Sub Banner1" class="img-responsive"></a>
                            <div class="bannertext">
                                <h2>wonem online</h2>
                                <p>Shop New Season Clothing</p>
                                <button class="btn">Shop Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div id="subbanner2" class="banner sub-hover">
                            <a href="{{ route('cat.man') }}"><img src="{{ asset('assets/frontend/image/banners/subbanner2.jpg') }}" alt="Sub Banner2" class="img-responsive"></a>
                            <div class="bannertext">
                                <h2>Accessories </h2>
                                <p>Get Wide Range Selection</p>
                                <button class="btn">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="center">
            <div class="container">
                <div class="row">
                    <div class="content col-sm-12">
                        <div class="customtab">
                            <h3 class="productblock-title">For Your Best Look</h3>
                            <div id="tabs" class="customtab-wrapper">
                                <ul class='customtab-inner'>
                                    <li class='tab'><a href="#tab-furnitur">Popular</a></li>
                                    <li class='tab'><a href="#tab-livin">Best Sellers</a></li>
                                    <li class='tab'><a href="#tab-outdoo">New Arrival</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- tab-furniture-->
                        <div id="tab-furnitur" class="tab-content">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="item">
                                        <div class="product-thumb">
                                            <div class="image product-imageblock"> <a href="#"> <img src="{{ asset('public/storage/product/'.$product->image) }}" alt="Popular Product" title="Popular Product" class="img-responsive" /> <img src="{{ asset('public/storage/product/'.$product->image) }}" alt="Popular Product" title="Popular Product" class="img-responsive" /> </a>
                                                <ul class="button-group">
                                                    <li>
                                                        <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="caption product-detail">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{ $product->name }}</a></h4>
                                                <p class="price product-price">Tk {{ $product->price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="viewmore">
                                    <div class="btn">View More All Products</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="{{ asset('assets/frontend/image/prlx.jpg')}}" alt="#"></div>
            <div class="container">
                <ul id="testimonial" class="row owl-carousel product-slider">
                    <li class="item">
                        <div class="panel-default">
                            <div class="testimonial-image z-depth-5"><img src="{{ asset('assets/frontend/image/t1.png') }}" alt="#"></div>
                            <div class="testimonial-name">
                                <h2>Janet Wilson</h2>
                            </div>
                            <div class="testimonial-designation">
                                <p>Web Designer</p>
                            </div>
                            <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum  ut labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="panel-default">
                            <div class="testimonial-image"><img src="{{ asset('assets/frontend/image/t2.png') }}" alt="#"></div>
                            <div class="testimonial-name">
                                <h2>Linda Howard</h2>
                            </div>
                            <div class="testimonial-designation">
                                <p>Web Deweloper</p>
                            </div>
                            <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum  ut labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="panel-default">
                            <div class="testimonial-image"><img src="{{ asset('assets/frontend/image/t3.png') }}" alt="#"></div>
                            <div class="testimonial-name">
                                <h2>Janet Wilson</h2>
                            </div>
                            <div class="testimonial-designation">
                                <p>Web Designer</p>
                            </div>
                            <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum  ut labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="content col-sm-12">
                    <div class="customtab">
                        <h3 class="productblock-title">Featured Products</h3>
                        <h4 class="title-subline">What’s so special? Check it out!</h4>
                    </div>
                    <div id="tab-furniture" class="tab-content">
                        <div id="special-slidertab" class="row owl-carousel product-slider">

                            @foreach($featured_products as $featured_product)
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image product-imageblock"> <a href="{{ route('cat.man') }}"> <img src="{{ asset('public/storage/product/'.$featured_product->image) }}" alt="Featured Product" title="Featured Product" class="img-responsive" /> <img src="{{ asset('public/storage/product/'.$featured_product->image) }}" alt="Featured Product" title="Featured Product" class="img-responsive" /> </a>
                                            <ul class="button-group">
                                                <li>
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="caption product-detail">
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                            <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{ $featured_product->name }}</a></h4>
                                            <p class="price product-price">Tk {{ $featured_product->price }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
