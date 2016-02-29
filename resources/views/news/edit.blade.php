@extends('admin.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    ویرایش خبر
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::model($news,['route'=>['xadmin.news.update',$news->id],'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                {!! Form::text('title',null,['class'=>'form-control','id'=>'title']) !!}
                            </div>
                            <div class="form-group">
                                <label for="image">درج تصویر</label>
                                <input class="form-control" id="image" name="image" type="file">
                            </div>
                            @if($news->image)
                                <div class="form-group">
                                    <img width="100" src="{{asset('images/news/')}}/{{$news->image}}" alt="">

                                </div>
                            @endif
                            {{--summernote--}}
                            {!! Form::textarea('content', null, ['class'=>'form-control article_summernote', 'rows'=>'10']) !!}
                            <div class="form-group">
                                <label>وضعیت انتشار</label>
                                {!! Form::select('status', [1=>'منتشر شود', 0=>'منتشر نشود'], null, ['class'=>'form-control select-status']) !!}
                            </div>
                            <div class="form-group">
                                <label>برچسب ها</label>
                                {!! Form::select('tags[]', $tags, $selectedTags, ['id'=>'tags_select','class'=>'form-control','multiple']) !!}
                            </div>
                            <button type="submit" class="btn btn-success">ارسال</button>

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