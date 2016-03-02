<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index($local='fa'){
        App::setLocale($local);
        $news=News::orderBy('id','Desc')->take(4)->get();
        //dd($news);
        return view('main.index',compact('news'));
    }
}
