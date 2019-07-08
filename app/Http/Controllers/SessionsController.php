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
dump(Auth::attempt($credentials));

die;
        if(Auth::attempt($credentials))
        {
            session()->flash('','');
            return redirect('/');
        }else{
            session()->flash('warning',"很抱歉，您的用户名和密码不匹配");
            return redirect()->back()->withInput();
        }
    }
}
