@extends('layouts.frontend.app')

@section('title','Man')

@push('css')
@endpush

@section('content')
    <div class="breadcrumb parallax-container">
        <div class="parallax"><img src="{{ asset('assets/frontend/image/prlx.jpg') }}" alt="#"></div>
        <h1 class="category-title">Desktops</h1>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            @include('layouts.frontend.inc.sideber')
            <div class=" content col-sm-9">
                <div class="category-page-wrapper">
                    <div class="col-md-2 text-right sort-wrapper">
                        <label class="control-label" for="input-sort">Sort By :</label>
                        <div class="sort-inner">
                            <select id="input-sort" class="form-control">
                                <option value="ASC" selected="selected">Default</option>
                                <option value="ASC">Name (A - Z)</option>
                                <option value="DESC">Name (Z - A)</option>
                                <option value="ASC">Price (Low &gt; High)</option>
                                <option value="DESC">Price (High &gt; Low)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1 text-right page-wrapper">
                        <label class="control-label" for="input-limit">Show :</label>
                        <div class="limit">
                            <select id="input-limit" class="form-control">
                                <option value="8" selected="selected">06</option>
                                <option value="25">10</option>
                                <option value="50">12</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 list-grid-wrapper">
                        <div class="btn-group btn-list-grid">
                            <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"></button>
                            <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"></button>
                        </div>
                    </div>
                </div>
                <br/>
                <div class="grid-list-wrapper">
                    @foreach($products as $product)
                        <div class="product-layout product-list col-xs-12">
                            <div class="product-thumb">
                                <div class="image product-imageblock"> <a href="{{ route('cat.man') }}">
                                        <img src="{{asset('public/storage/product/'.$product->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                        <img src="{{asset('public/storage/product/'.$product->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                    </a>
                                    <ul class="button-group grid-btn">
                                        <li>
                                            <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="caption product-detail">
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{ $product->name }}</a></h4>
                                    <p class="price product-price">Tk {{ $product->price }}</p>
                                    <p class="product-desc"> More room to move.

                                        With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.

                                        Cover Flow.

                                        Browse through your music collection by flipping..</p>
                                    <ul class="button-group list-btn">
                                        <li>
                                            <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
                <div class="category-page-wrapper">
                    <div class="result-inner">Showing 1 to 8 of 10 (2 Pages)</div>
                    <div class="pagination-inner">
                        <ul class="pagination">
                            <li class="active"><span>1</span></li>
                            <li><a href="category.html">2</a></li>
                            <li><a href="category.html">&gt;</a></li>
                            <li><a href="category.html">&gt;|</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')

@endpush
