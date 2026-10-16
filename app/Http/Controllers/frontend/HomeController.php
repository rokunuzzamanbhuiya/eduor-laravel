<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){

        return view('frontend.index');

    }
    function index_2(){

        return view('frontend.index_2');

    }
    function index_3(){

        return view('frontend.index_3');

    }
}
