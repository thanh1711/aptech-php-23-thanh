<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    function thanh(){
        return view('tenthanh');

    }
    function hung(){
        return 'function thu 2';
    }
}
