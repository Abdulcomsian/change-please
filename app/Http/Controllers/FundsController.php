<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundsController extends Controller
{
    public function get_funds()
    {
        return view('analyst.questions.funds');
    }
}
