<?php

namespace App\Http\Controllers;

use App\Contact;

use App\Events\ContactFormSent;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;
use Laracasts\Flash\Flash;

class ContactController extends Controller
{
    //
    public function index(){
        return view('main.contact');
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
            'phone'=>'required|numeric'
        ]);
        $input=$request->all();

        $contact= Contact::create([
            'name'=>$input['name'],
            'company'=>$input['company'],
            'email'=>$input['email'],
            'phone'=>$input['phone'],
            'description'=>$input['description'],
            'ip'=>$request->getClientIp()
        ]);
        Event::fire(new ContactFormSent($contact));
        Flash::success(trans('language.contactFormSubmitted'));
        //dd(Session::all());
        return redirect()->back();
        //return redirect(route('home'));
    }

    /*
    Show Contact List for Admin
    */
    public  function adminIndex(){
        $contacts=Contact::orderBy('id','DESC')->paginate(Config::get('nafisConfig.perPage'));

        //dd($contacts->total());
        return view('admin.contactAdminIndex',compact('contacts'))->with([
            'title'=>'لیست تماس ها'
        ]);
    }
}
