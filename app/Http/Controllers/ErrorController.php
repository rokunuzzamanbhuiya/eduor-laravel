<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    function error(){

        return view('frontend.error');

    }
}
