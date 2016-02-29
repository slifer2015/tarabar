@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ویرایش لینک
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::model($link,['route'=>['xadmin.link.update',$link->id],'method'=>'post']) !!}
                            <div class="form-group">
                                <label for="name">عنوان</label>
                                {!! Form::text('name',null,['class'=>'form-control','id'=>'name']) !!}
                            </div>
                            <div class="form-group">
                                <label for="url">آدرس سایت</label>
                                {!! Form::input('url','url',null,['class'=>'form-control','id'=>'url']) !!}

                            </div>
                            <div class="form-group">
                                <label for="description">توضیحات</label>
                                {!! Form::textarea('description',null,['class'=>'form-control','id'=>'description','row'=>'5']) !!}

                            </div>
                            <div class="form-group">
                                <label>وضعیت انتشار</label>
                                {!! Form::select('status', [1=>'منتشر شود', 0=>'منتشر نشود'], null, ['class'=>'form-control select-status']) !!}
                            </div>

                            <button type="submit" name="create-close" class="btn btn-success">ذخیره</button>
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