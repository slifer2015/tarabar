<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Laracasts\Flash\Flash;

class LinkController extends Controller
{
    //
    public function create(){
        return view('admin.link.create')->with(['title'=>'مدیریت لینک ها']);
    }

    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'name'=>'required|min:2',
            'url'=>'required|url',
            'status'=>'required|in:0,1'
        ]);

        $input=$request->except('_token');

        Link::create([
            'name'=>$input['name'],
            'url'=>$input['url'],
            'description'=>$input['description'],
            'status'=>$input['status']
        ]);

        Flash::success('لینک با موفقیت ایجاد گردید');
        if($request->has('create-new')){
            return redirect()->back();
        }elseif($request->has('create-close')){
            return redirect(route('xadmin.link.index'));
        }

    }

    public function adminIndex(){
        $links = Link::orderBy('id','desc')->paginate(Config::get('nafisConfig.perPage'));
        return view('admin.link.index',compact('links'))->with(['title'=>'مدیریت لینک ها']);
    }

    public function delete(Link $link){
        //dd($link);
        $link->delete();
        Flash::success('لینک مورد نظر با موفقعیت حذف گردید.');
        return redirect(route('xadmin.link.index'));
    }

    public function edit(Link $link){
        return view('admin.link.edit',compact('link'))->with(['title'=>'مدیریت لینک ها']);
    }

    public function update(Link $link,Request $request){
        //dd($request->all());
        $this->validate($request,[
            'name'=>'required|min:2',
            'url'=>'required|url',
            'status'=>'required|in:0,1'
        ]);

        $input=$request->except('_token');

        $link->update([
            'name'=>$input['name'],
            'url'=>$input['url'],
            'description'=>$input['description'],
            'status'=>$input['status']
        ]);

        Flash::success('لینک با موفقیت ویرایش گردید');
            return redirect(route('xadmin.link.index'));
    }
}
