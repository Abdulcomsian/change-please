<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Repository\Competition;

class CompetitionController extends Controller
{
    protected $rules = ['planId' => 'required|integer'];

    protected $competition;

    public function __construct(Competition $competition)
    {
        $this->competition  = $competition;
    }

    public function get_competition()
    {
        return view('analyst.questions.competition');
    }

    public function add_competition(Request $request)
    {
        $request->validate($this->rules);
        
        return $this->competition->add_competition_plan($request);
    }
}
