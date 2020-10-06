@extends('layouts.backend.app')

@section('title','Social Media Link')


@push('css')

@endpush


@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Update Social Media Link</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">

                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success')  }}
                </div>
                @endif

                <form method="post" action="{{ route('admin.update.social.link') }}" enctype="multipart/form-data">

                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label>Facebook</label>
                        <input class="form-control" type="text" name="facebook" placeholder="Facebook link.." >
                    </div>

                    <div class="form-group">
                        <label>Twitter</label>
                        <input class="form-control" type="text" name="twitter" placeholder="Twitter link.." >
                    </div>

                    <div class="form-group">
                        <label>Instagram</label>
                        <input class="form-control" type="text" name="instagram" placeholder="Instagram link.." >
                    </div>

                    <div class="form-group">
                        <label>LinkedIn</label>
                        <input class="form-control" type="text" name="linkedin" placeholder="LinkedIn link.." >
                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush
