@extends('layouts.backend.app')

@section('title','About Us')


@push('css')

@endpush


@section('content')
    <div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Content</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                <form method="post" action="{{ route('admin.update.about') }}" enctype="multipart/form-data">

                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" value="{{ isset($about->title)?$about->title:'' }}" name="title">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Short Description</label>
                                <textarea class="description" name="description">{{ isset($about->description)?$about->description:'' }}</textarea>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone Number <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="phone" value="{{ isset($about->phonenumber)?$about->phonenumber:'' }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input class="form-control" type="text" name="mobile" value="{{ isset($about->mobile)?$about->mobile:'' }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Fax <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="fax" value="{{ isset($about->fax)?$about->fax:'' }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="email" value="{{ isset($about->email)?$about->email:'' }}">
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address" value="{{ isset($about->address)?$about->address:'' }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>House Number</label>
                                        <input type="text" class="form-control" name="house" value="{{ isset($about->housenumber)?$about->housenumber:'' }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="city" value="{{ isset($about->city)?$about->city:'' }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control" name="postal" value="{{ isset($about->postalcode)?$about->postalcode:'' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@push('js')
    <!-- Load TinyMCE -->
        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
        <script>
            tinymce.init({
                selector:'textarea.description',
                width: 800,
                height: 300
            });
        </script>
@endpush
@endsection
