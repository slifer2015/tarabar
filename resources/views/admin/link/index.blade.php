@extends('admin.layout')
@section('content')
    <div class="pull-left" style="margin-bottom: 5px;">
        <a class="btn btn-success btn-sm" href="{{route('xadmin.link.create')}}"><i class="fa fa-plus"></i> جدید</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>عنوان</th>
                <th>لینک</th>
                <th>توضیحات</th>
                <th>وضعیت</th>
                <th>تاریخ ایجاد</th>
                <th>عملیات</th>

            </tr>
            </thead>
            <tbody>
            @foreach($links as $key=>$link)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$link->name}}</td>
                    <td>{{$link->url}}</td>
                    <td>{{$link->description}}</td>
                    <td>
                        @if($link->status)
                            فعال
                        @else
                            غیرفعال
                        @endif
                    </td>
                    <td>{{$link->shamsi_created_at}}</td>
                    <td>
                        <a href="{{route('xadmin.link.edit',$link->id)}}" class="btn btn-info btn-sm">ویرایش</a>
                        <a href="{{route('xadmin.link.delete',$link->id)}}" data-delete-confirm class="btn btn-danger btn-sm">حذف</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">{{$links->render()}}</div>
    </div>
@endsection