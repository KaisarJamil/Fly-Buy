@extends('layouts.backend.app')

@section('title','Add Sub-category')


@push('css')
@endpush


@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add New Sub-Category</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <form method="post" action="{{ route('admin.sub.cat.store') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label>Sub-Category Name</label>
                        <input name="sub_category" class="form-control" type="text">

                        <label>Category</label>
                        <select multiple name="categories[]" class="mdb-select colorful-select dropdown-primary md-form" >

                            <option value="">Select one</option>

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>


                    <div class="m-t-20 text-center">
                        <button type="submit" class="btn btn-primary submit-btn">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush
