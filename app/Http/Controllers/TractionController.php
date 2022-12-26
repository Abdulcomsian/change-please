<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TractionController extends Controller
{
    public function get_traction()
    {
        return view('analyst.questions.traction');
    }
}
