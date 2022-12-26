<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExistingFinancialRoundController extends Controller
{
    public function get_existing_financial_round()
    {
        return view('analyst.questions.existing_financial');
    }
}
