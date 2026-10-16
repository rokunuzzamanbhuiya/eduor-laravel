<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    function courses(){

        return view('frontend.courses');

    }

    function course_details(){

        return view('frontend.course_details');

    }
}
