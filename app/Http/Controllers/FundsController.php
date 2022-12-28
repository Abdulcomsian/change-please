<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\Funds;

class FundsController extends Controller
{
    protected $rules = ['planId' => 'required|integer'];
    
    protected $funds;

    public function __construct(Funds $funds)
    {
        $this->funds = $funds;
    }

    public function get_funds()
    {
        return view('analyst.questions.funds');
    }

    public function add_funds(Request $request)
    {
        return $this->funds->add_funds_plan($request);
    }
}
