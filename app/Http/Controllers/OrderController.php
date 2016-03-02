<?php

namespace App\Http\Controllers;

use App\Events\OrderFormSent;
use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Session;
use Jenssegers\Agent\Agent;
use Laracasts\Flash\Flash;

class OrderController extends Controller
{
    //
    public function index(){
        //Session::put('flash_notification', ["message" => "فرم با موفقیت ارسال گردید", "level" => "success"]);
        //Session::flush();
        //dd(Session::all());
        return view('main.orders');
    }

    public function store(Request $request){

        //dd(Session::all());
        //dd($request->all());
        //$agent = new Agent();
        //dd($agent->is('Windows'));
        //dd($request->getClientIp());
        $this->validate($request,[
            'name'=>'required|string|max:50',
            'company'=>'string|max:70',
            'email'=>'required|email|max:70',
            'phone'=>'required|numeric',
            'services'=>'required',
            'respond'=>'required',
            'is_client'=>'in:0,1'
        ]);
        $input=$request->all();
        $input['services']=implode(',',$input['services']);
        $order= Order::create([
            'name'=>$input['name'],
            'company'=>$input['company'],
            'email'=>$input['email'],
            'phone'=>$input['phone'],
            'fax'=>$input['fax'],
            'description'=>$input['description'],
            'services'=>$input['services'],
            'respond'=>$input['respond'],
            'is_client'=>$input['is_client'],
            'hear_about'=>$input['hear_about'],
            'ip'=>$request->getClientIp()
        ]);
        Event::fire(new OrderFormSent($order));
        Flash::success(trans('language.orderFormSubmitted'));
        //dd(Session::all());
        return redirect()->back();
        //return redirect(route('home'));
    }

    /*
    Show Order List for Admin
    */
    public  function adminIndex(){
        //$orders=Order::orderBy('id','DESC')->get();
        $orders=Order::orderBy('id','desc')->paginate(Config::get('nafisConfig.perPage'));
        //dd($orders);
        return view('admin.orderAdminIndex',compact('orders'))->with([
            'title'=>'لیست درخواستها'
        ]);
    }

}
