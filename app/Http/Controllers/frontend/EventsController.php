<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    function events(){

        return view('frontend.events');

    }

    function event_details(){

        return view('frontend.event_details');

    }
}
