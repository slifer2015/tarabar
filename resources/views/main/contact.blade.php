@extends('main.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @include('main.partials.contactForm')
            </div>
            <div class="col-sm-6">
                @include('main.partials.info')
            </div>
            <div class="col-sm-12">
                @include('main.partials.google')
            </div>
        </div>
    </div>

    @endsection
@section('script')
    @endsection