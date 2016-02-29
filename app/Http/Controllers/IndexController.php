<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $news=News::orderBy('id','Desc')->take(4)->get();
        //dd($news);
        return view('main.index',compact('news'));
    }
}
