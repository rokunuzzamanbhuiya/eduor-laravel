<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    function signup(){
        return view('frontend.sign_up');
    }
    function signin(){
        return view('frontend.sign_in');
    }
}
