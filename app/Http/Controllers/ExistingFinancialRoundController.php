<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\ExistingFinancial;

class ExistingFinancialRoundController extends Controller
{
    protected $rules = ['planId' => 'required|integer'];

    protected $existingFinancial;

    public function __construct(ExistingFinancial $existingFinancial)
    {
        $this->existingFinancial  = $existingFinancial;
    }

    public function get_existing_financial_round()
    {
        return view('analyst.questions.existing_financial');
    }

    public function add_existing_financial(Request $request)
    {
        $request->validate($this->rules);
        
        return $this->existingFinancial->add_existing_financial_plan($request);
    }


}
