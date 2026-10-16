<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function course(){

        return view('frontend.course');

    }

    function course_details(){

        return view('frontend.course_details');

    }
}
