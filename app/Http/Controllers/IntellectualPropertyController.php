<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntellectualPropertyController extends Controller
{
    public function get_intellectual_property()
    {
        return view('analyst.questions.intellectual_property');
    }
}
