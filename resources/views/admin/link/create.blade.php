@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
ایجاد لینک
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(['route'=>'xadmin.link.store','method'=>'post']) !!}
                            <div class="form-group">
                                <label for="name">عنوان</label>
                                <input id="name" name="name" class="form-control"
                                       placeholder="عنوان را وارد نمایید ...">
                            </div>
                            <div class="form-group">
                                <label for="url">آدرس سایت</label>
                                <input id="url" type="url" name="url" class="form-control" placeholder="http://google.com">
                            </div>
                            <div class="form-group">
                                <label for="description">توضیحات</label>
                                <textarea id="description" name="description" class="form-control" rows="5" placeholder="توضیحات را وارد کنید"></textarea>
                            </div>
                            <div class="form-group">
                                <label>وضعیت انتشار</label>
                                {!! Form::select('status', [1=>'منتشر شود', 0=>'منتشر نشود'], 1, ['class'=>'form-control select-status']) !!}
                            </div>
                            <button type="submit" name="create-new" class="btn btn-success">ایجاد و جدید</button>
                            <button type="submit" name="create-close" class="btn btn-success">ایجاد</button>
                            <a href="{{route('xadmin.link.index')}}" class="btn btn-primary">بازگشت</a>

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