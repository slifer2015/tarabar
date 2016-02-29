@extends('admin.layout')
@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>نام</th>
                <th>شرکت</th>
                <th>ایمیل</th>
                <th>تلفن</th>
                <th>توضیحات</th>
                <th>آی پی</th>
                <th>تاریخ ارسال</th>

            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $key=>$contact)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->company}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->description}}</td>
                    <td>{{$contact->ip}}</td>
                    <td>{{$contact->shamsi_created_at}}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <div class="text-center">{{$contacts->render()}}</div>
        {{--<div>
            {{$contacts->total()}}
        </div>--}}
        {{--<div>
            <a href="{{route('xadmin.contact.index',['page'=>2])}}">2</a>
        </div>--}}
    </div>
@endsection