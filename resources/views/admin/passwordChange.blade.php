@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
تغییر گذرواژه
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(['route'=>'xadmin.password.submit','method'=>'post']) !!}
                            <div class="form-group">
                                <label for="email"> ایمیل</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">گذرواژه جدید</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">تکرار گذرواژه جدید</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">ثبت</button>
                            <a href="{{route('xadmin.index')}}" class="btn btn-primary">بازگشت</a>

                            </form>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
@section('script')
@endsection