@extends('layouts.backend.app')

@section('title','Edit Product')


@push('css')
@endpush


@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Product</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success')  }}
                    </div>
                @endif
                <form action="{{ route('admin.product.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <label>Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" value="{{ $product->name }}" type="text" name="name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="select @error('category') is-invalid @enderror" name="category">

                                    @error('category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <option value="">Select one</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id==$product->category_id?'selected':''}}> {{ $category->name }}</option>
                                    @endforeach

                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sub-Category</label>
                                <select class="select @error('sub_category') is-invalid @enderror" name="sub_category">

                                    @error('sub_category')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <option value="">Select one</option>
                                    @foreach($sub_categories as $subCategory)
                                    <option value="{{ $subCategory->id }}" {{ $subCategory->id==$product->subcategory_id?'selected':'' }}> {{ $subCategory->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>


                    <label>Color</label>
                    <select multiple name="colors[]" class="mdb-select colorful-select dropdown-primary md-form @error('colors') is-invalid @enderror" >

                        @error('colors')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <option value="">Select one</option>
                        @foreach($colors as $color)

                            <option
                                @foreach($product->colors as $pcolor)
                                {{ $pcolor->id==$color->id? 'selected':'' }}
                                @endforeach
                                value="{{ $color->id }}" > {{ $color->name }}
                            </option>
                        @endforeach
                    </select>

                    <label>Size</label>
                    <select multiple name="sizes[]" class="mdb-select colorful-select dropdown-primary md-form @error('sizes') is-invalid @enderror" >

                        @error('sizes')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <option value="">Select one</option>
                        @foreach($sizes as $size)
                            <option
                                @foreach($product->sizes as $psize)
                                {{ $psize->id==$size->id? 'selected':'' }}
                                @endforeach
                                value="{{ $size->id }}">{{ $size->size }}
                            </option>
                        @endforeach

                    </select>

                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control @error('price') is-invalid @enderror" value="{{ $product->price }}" type="number" min="1" name="price">

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <tr>
                        <td>
                            <label>Current Image</label>
                        </td>
                        <td>
                            <img src="{{asset('public/storage/product/'.$product->image)}}">
                        </td>
                    </tr>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <div>
                            <input class="form-control" type="file" name="image">
                            <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png.</small>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Feature Product : </label>
                        <input class="feature_product" type="checkbox" name="feature_product" @if($product->feature_product=="1") checked @endif value="1">

                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="notification-box">
        <div class="msg-sidebar notifications msg-noti">
            <div class="topnav-dropdown-header">
                <span>Messages</span>
            </div>
            <div class="drop-scroll msg-list-scroll" id="msg_list">
                <ul class="list-box">
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Richard Miles </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Melita Faucher</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Jeffery Lalor</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">L</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Loren Gatlin</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Tarah Shropshire</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="chat.html">See all messages</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush
