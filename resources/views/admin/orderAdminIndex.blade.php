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
                <th>فکس</th>
                <th>توضیحات</th>
                <th>مشتری</th>
                <th>نحوه آشنایی</th>
                <th>نحوه پاسخ گویی</th>
                <th>سرویس ها</th>
                <th>آی پی</th>
                <th>تاریخ ارسال</th>

            </tr>
            </thead>
            <tbody>
            @foreach($orders as $key=>$order)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->company}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->fax}}</td>
                    <td>{{$order->description}}</td>
                    <td>
                        @if($order->is_client)
                            بله
                            @else
                            خیر
                            @endif
                    </td>
                    <td>{{$order->hear_about}}</td>
                    <td>{{$order->respond}}</td>
                    <td>{{$order->services}}</td>
                    <td>{{$order->ip}}</td>
                    <td>{{$order->shamsi_created_at}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="text-center">{{$orders->render()}}</div>
    </div>
@endsection