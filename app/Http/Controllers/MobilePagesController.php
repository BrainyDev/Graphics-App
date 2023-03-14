<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilePagesController extends Controller
{
    //returns mobile index page
    public function index()
    {
        return view('mobile.landing');
    }
}
