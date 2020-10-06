@extends('layouts.backend.app')

@section('title','Product List')


@push('css')
@endpush


@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Product List</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{ route('admin.add.product') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Product</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    @if(session('success'))
                    <div class="alert alert-success" role="alert">

                        {{ session('success') }}

                    </div>
                    @endif
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th width="5%">Product No.</th>
                                <th width="15%">Name</th>
                                <th width="10%">Category</th>
                                <th width="10%">Sub-Category</th>
                                <th width="10%">Color</th>
                                <th width="10%">Size</th>
                                <th width="5%">Price</th>
                                <th width="10%">Image</th>
                                <th width="5%">Feature Product</th>
                                <th width="5%" class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $key=>$product)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->subcategory->name }}</td>
                                <td>
                                    @foreach($product->colors as $key=>$color)
                                    {{ $product->colors->count() == $key+1?$color->name : $color->name .','}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($product->sizes as $key=>$size)
                                    {{ $product->sizes->count() == $key+1?$size->size : $size->size .','}}
                                    @endforeach
                                </td>
                                <td>{{ $product->price }}</td>
                                <td class="center">
                                    <img src="{{ asset('public/storage/product/'.$product->image) }}" width="50px;" height="50px;">
                                </td>
                                <td>
                                    <input  type="checkbox" name="feature_product" @if($product->feature_product=="1") checked @endif value="1">
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('admin.product.edit',$product->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="{{ route('admin.product.delete',$product->id) }}" data-toggle="modal"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('js')
@endpush
