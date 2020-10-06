@extends('layouts.frontend.app')

@section('title','About Us')

@push('css')
@endpush

@section('content')
    <div class="breadcrumb parallax-container">
        <div class="parallax"><img src="{{ asset('assets/frontend/image/prlx.jpg') }}" alt="#"></div>
        <h1>About us</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach($abouts as $about)
            <div class="wwd">
                <div class="col-sm-5"><img class="img-responsive" src="{{ asset('assets/frontend/image/blog_1.jpg') }}" alt="#"></div>
                <div class="col-sm-7">
                    <div class="column-inner ">
                        <div class="wrapper">
                            <h4 class="aboutus-title">{{ $about->title }}</h4>
                            <div class="desc">
                                <p>{{ $about->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
@endsection

@push('js')

@endpush
