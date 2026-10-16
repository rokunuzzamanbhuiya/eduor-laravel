<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function blog(){

        return view('frontend.blog');

    }
    function blog_details(){

        return view('frontend.blog_details');

    }
}
