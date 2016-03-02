@extends('auth.layout')
@section('content')
    <div class="login-panel">
        <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-sm-10 col-sm-push-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user"></i>
                    ثبت نام در سایت
                </div>
                <div class="panel-body">
                    <!-- Validation Error -->
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- End Validation Error -->
                        {!! Form::open(['class'=>'form-horizontal','url'=>'/register']) !!}
                        <div class="form-group @if($errors->has('name')) has-error @endif" >
                            <label class="control-label col-sm-4" for="name">نام و نام خانوادگی</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="name" id="name" type="text">
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('email')) has-error @endif" >
                            <label class="control-label col-sm-4" for="email">ایمیل</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="email" id="email" type="email">
                            </div>
                        </div>
                        <div class="form-group  @if($errors->has('password')) has-error @endif">
                            <label class="control-label col-sm-4" for="password">گذرواژه</label>
                            <div class="col-sm-8">
                                <input name="password" class="form-control" id="password" type="password">
                            </div>
                        </div>
                        <div class="form-group  @if($errors->has('password_confirmation')) has-error @endif">
                            <label class="control-label col-sm-4" for="password_confirmation">تکرار گذرواژه</label>
                            <div class="col-sm-8">
                                <input name="password_confirmation" class="form-control" id="password_confirmation" type="password">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-nafis btn-block">
                                                        ثبت نام
                        </button>

                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection