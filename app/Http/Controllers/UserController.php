<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get_signed_up()
    {
        return view('user.sign_complete');
    }
    public function get_investee_question_form(Request $request)
    {
        return view('user.questions.investee_questions')->with(['planId' => $request->planId ]);
    }
    public function get_general_information()
    {
        return view('user.questions.general_information');
    }
    public function get_done()
    {
        return view('user.done');
    }
    public function get_service()
    {
        return view('user.services');
    }
    public function get_offerings()
    {
        return view('user.offerings');
    }
    public function get_home()
    {
        return view('user.home');
    }
    public function get_filter()
    {
        return view('user.filter');
    }
    public function get_invester()
    {
        return view('user.invester_general_information');
    }
    public function get_plan_statistics()
    {
        return view('user.plan');
    }
    public function get_investee_profile()
    {
        return view('user.investee_profile');
    }
    public function get_investee_answers()
    {
        return view('user.answer');
    }
}
