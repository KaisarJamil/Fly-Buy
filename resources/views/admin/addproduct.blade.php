@extends('layouts.backend.app')

@section('title','Add Product')


@push('css')
@endpush


@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add New Product</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success')  }}
                    </div>
                @endif
                <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name">
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
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sub-Category</label>
                                <select class="select @error('sub_category') is-invalid @enderror" name="sub_category">
                                    <option value="">Select one</option>
                                    @foreach($sub_categories as $subCategory)
                                    <option value="{{ $subCategory->id }}">{{ $subCategory->name }}</option>
                                    @endforeach
                                </select>
                                @error('sub_category')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
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
                            <option value="{{ $size->id }}">{{ $size->size }}</option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control @error('price') is-invalid @enderror" type="number" min="1" name="price">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Upload Image</label>
                        <div>
                            <input class="form-control" type="file" name="image">
                            <small class="form-text text-muted">Max. file size: 5 MB. Allowed images: jpg, gif, png.</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Feature Product : </label>
                            <input class="feature_product" type="checkbox" name="feature_product" value="1">

                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush
