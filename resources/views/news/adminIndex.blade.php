@extends('admin.layout')
@section('content')
    <div class="pull-left" style="margin-bottom: 5px;">
        <a class="btn btn-success btn-sm" href="{{route('xadmin.news.create')}}"><i class="fa fa-plus"></i> جدید</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>عنوان</th>
                <th>متن</th>
                <th>نویسنده</th>
                <th>وضعیت</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>

            </tr>
            </thead>
            <tbody>
            @foreach($news as $key=>$new)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$new->title}}</td>
                    <td>{!! substr(strip_tags($new->content),0,50) !!}</td>
                    <td>{{$new->user->name}}</td>
                    <td>
                        @if($new->status)
                            فعال
                        @else
                            غیرفعال
                        @endif
                    </td>
                    <td>{{$new->shamsi_created_at}}</td>
                    <td>
                        <a href="{{route('xadmin.news.edit',$new->id)}}" class="btn btn-info btn-xs">ویرایش</a>
                        <a href="" class="btn btn-info btn-xs">نمایش</a>
                        <a href="{{--{{route('xadmin.news.delete',$new->id)}}--}}" data-delete-confirm class="btn btn-danger btn-xs">حذف</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">{{$news->render()}}</div>
    </div>
@endsection