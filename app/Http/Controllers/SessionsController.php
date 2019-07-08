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
            'user_name' =>  'required|max:255',
            'password'  =>  'required',
        ]);

        if(Auth::attempt($credentials))
        {
            session()->flash('','');
            return redirect('/');
        }else{
            session()->flash('danger',"很抱歉，您的邮箱和密码不匹配");
            return redirect()->back()->withInput();

        }
    }
}
