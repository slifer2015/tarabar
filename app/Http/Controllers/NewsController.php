<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function create(){
        return view('news.create')->with([
            'title'=>'ثبت خبر جدید'
        ]);
    }
}
