<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function get_competition()
    {
        return view('analyst.questions.competition');
    }
}
