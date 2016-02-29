<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class PasswordController extends Controller
{
    //
    private $user;
    public function __construct(Request $request)
    {
        $this->user=$request->user();
    }

    public function change(){
        $user=$this->user;
        return view('admin.passwordChange',compact('user'))->with([
            'title'=>'تغییر گذرواژه'
        ]);
    }

    public function submit(Request $request){
        //dd(bcrypt('123456'));
        //dd($request->all());
        $user=$this->user;
        $this->validate($request,[
           'email'=>'required|email',
           'password'=>'required|confirmed|min:6'
        ]);
        $input=$request->all();
        $findUser=User::where('email',$input['email'])->first();
        //dd($findUser);
        if($findUser){
            if($findUser->id === $user->id){
                //dd('ok');
                $user->update([
                    'password'=>bcrypt($input['password'])
                ]);
                Flash::success('گذرواژه با موفقیت تغییر کرد');
                Auth::logout();
                return redirect(route('xadmin.index'));
            }else {
                Flash::error('اطلاعات وارد شده صحیح نمی باشد');
                return redirect(route('xadmin.index'));
            }
        }else {
            Flash::error('اطلاعات وارد شده صحیح نمی باشد');
            return redirect()->back();
        }
    }
}
