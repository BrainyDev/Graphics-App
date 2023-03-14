<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //returns relevant blade 
    public function landing()
    {
        return view('web.landing');
    }

     //returns relevant blade 
     public function category()
     {
         return view('web.category');
     }

      //returns relevant blade 
      public function singleShop()
      {
          return view('web.single_shop');
      }


}
