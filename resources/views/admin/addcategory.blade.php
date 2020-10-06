@extends('layouts.backend.app')

@section('title','Add Category')


@push('css')

@endpush


@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add New Category</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success')  }}
                </div>
                @endif

                <form method="post" action="{{route('admin.cat.store')}}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" type="text" name="category">
                    </div>


                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush
