<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    function terms_condition(){

        return view('frontend.terms_condition');

    }
}
