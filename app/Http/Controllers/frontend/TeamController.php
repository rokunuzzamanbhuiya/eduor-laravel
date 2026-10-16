<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    function team(){

        return view('frontend.team');

    }

    function team_details(){

        return view('frontend.team_details');

    }
}
