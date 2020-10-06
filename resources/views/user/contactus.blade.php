@extends('layouts.frontend.app')

@section('title','Contact Us')

@push('css')
@endpush

@section('content')
    <div class="breadcrumb parallax-container">
        <div class="parallax"><img src="{{ asset('assets/frontend/image/prlx.jpg')}}" alt="#"></div>
        <h1>Contact Us</h1>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            @foreach($contacts as $contact)
            <div class="col-sm-4">
                <div class="complaint">
                    <h2 class="tf">Tel</h2>
                    <div class="call-info">{{ $contact->phonenumber }}</div>
                    <div class="call-info">{{ $contact->mobile }}</div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="email">
                    <h2 class="tf">Mail</h2>
                    <div class="email-info">{{ $contact->email }}</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="time">
                    <h2 class="tf">Time</h2>
                    <div class="time-info">Everyday: 9:00 – 18:00</div>
                </div>
            </div>
                @endforeach
        </div>
        <div class="main-form">
            <h3 class="contactus-title">Leave Message</h3>

            <div class="row">
                <form name="contactform" method="post" action="{{ route('message') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="col-sm-6">
                        <input type="text" required name="name" placeholder="Name">
                    </div>
                    <div class="col-sm-6 ">
                        <input type="email" required name="email" placeholder="Email">
                    </div>
                    <div class="col-sm-6 ">
                        <input type="text" required name="phone" placeholder="Phone Number">
                    </div>
                    <div class="col-sm-6 ">
                        <input type="text" required name="subject" placeholder="Subject">
                    </div>
                    <div class="col-xs-12 ">
                        <textarea required name="message" placeholder="Message" rows="3" cols="30"></textarea>
                    </div>
                    <div class="col-xs-12  text-center">
                        <div class="commun-btn">
                            <button type="submit" name="submit" class="btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3477738330766!2d90.36742721445692!3d23.806229292559333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c17a37c4d959%3A0xf97cf0f2d9643b83!2sBlack%202!5e0!3m2!1sen!2sbd!4v1577897809409!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
