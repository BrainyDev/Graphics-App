<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //returns dashboard 
    public function dashboard()
    {
        return view('web.admin.dashboard');
    }
}
