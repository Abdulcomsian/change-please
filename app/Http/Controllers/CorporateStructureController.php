<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateStructureController extends Controller
{
    public function get_corporate_structure_controller()
    {
        return view('analyst.questions.corporate_structure');
    }
}
