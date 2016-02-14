<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<!--header begins-->
@include('main.partials.header')
<!--header ends-->

<!--navbar begins-->
@include('main.partials.navbar')
<!--navbar ends-->

<!--slider begins-->

<!--slider ends-->

<!--main content begins-->

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