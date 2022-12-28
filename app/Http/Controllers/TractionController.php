<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\Traction;

class TractionController extends Controller
{
    protected $rules = ['planId' => 'required|integer'];

    protected $traction;

    public function __construct(Traction $traction)
    {
        $this->traction  = $traction;
    }

    public function get_traction()
    {
        return view('analyst.questions.traction');
    }

    public function add_traction(Request $request)
    {
        $request->validate($this->rules);
        
        return $this->traction->add_traction_plan($request);
    }
}
