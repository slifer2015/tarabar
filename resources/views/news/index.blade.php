@extends('main.layout')
@section('content')
<main>
    <div class="container news-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-newspaper-o"></i>
                        اخبار اقتصادی
                    </div>
                    <div class="panel-body">
                        <ul class="media-list">
                            <!--each news begins-->
                            @foreach($news as $new)
                                <li class="media">
                                    <div class="media-left">
                                        <a href="{{route('news.show',$new->id)}}">
                                            <img class="media-object" src="{{asset('images/news')}}/{{$new->avatar}}" alt="{{$new->title}}">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading text-muted">{{$new->title}}</h4>
                                        <p class="media-description">
                                            {!! $new->content !!}
                                        </p>
                                        <a href="{{route('news.show',$new->id)}}" class="btn btn-default btn-nafis pull-left">ادامه مطلب</a>
                                    </div>
                                </li>
                                @endforeach
                                        <!--each news ends-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">{{$news->render()}}</div>
</main>
    @endsection