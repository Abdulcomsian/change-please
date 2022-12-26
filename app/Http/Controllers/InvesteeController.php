<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvesteeController extends Controller
{
    public function get_investee()
    {
        return view('analyst.investee');
    }
}
