<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SessionsController extends Controller
{
    //

    public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request,[
            'account' =>  'required|max:255',
            'password'  =>  'required',
        ]);

        if(Auth::attempt($credentials))
        {
            session()->flash('success','登录成功');
            return redirect('/');
        }else{
            session()->flash('danger',"很抱歉，您的用户名和密码不匹配");
            return redirect()->back()->withInput();

        }
    }

    public function destroy ()
    {
        Auth::logout();
        session()->flash('success','您已成功退出!');
        return redirect('login');
    }
}
