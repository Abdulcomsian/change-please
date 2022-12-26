<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessModelController extends Controller
{
    public function get_business_model()
    {
        return view('analyst.questions.business_model');
    }
}
