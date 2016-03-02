<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{--for rtl--}}
    <?php
        if(\Illuminate\Support\Facades\App::getLocale()=='fa') {

    ?>
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <?php
        }
    ?>
    {{--for rtl--}}
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{--for ltr--}}
    <?php
    if(\Illuminate\Support\Facades\App::getLocale()=='en') {

        ?>
    <link rel="stylesheet" href="{{asset('css/ltr.main.css')}}">
    <?php
    }
    ?>
    {{--for ltr--}}
</head>
<body>

<!--header begins-->
@include('main.partials.header')
<!--header ends-->

<!--navbar begins-->
@include('main.partials.navbar')
<!--navbar ends-->

<!--slider begins-->
@include('main.partials.slider')
<!--slider ends-->

<!-- Error Messages -->
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="alerts-box">
                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Error Messages ends -->

<!-- Flash Messages -->
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            @include('flash::message')
        </div>
    </div>
</div>

<!-- Flash Messages ends -->

<!--main content begins-->
@yield('content')
<!--main content ends-->

<!--news feed begins-->

<!--news feed ends-->

<!--footer begins-->
@include('main.partials.footer')
<!--footer ends-->

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>