<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function get_financial()
    {
        return view('analyst.questions.financial');
    }
}
