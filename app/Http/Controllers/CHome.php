<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CHome extends Controller
{
    function index() {
        if(checkRole("guru")){
            return view('home/index');
        }else{
            return view('home/index');
        }
    }
}
