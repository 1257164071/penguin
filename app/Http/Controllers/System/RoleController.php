<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    //

    public function create()
    {
        return view('system.role.create');
    }

    public function store()
    {

    }
}
