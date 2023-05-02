<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Http\Repository\Home;
use App\Models\User;

class UserController extends Controller
{
    public $home;

    public function __construct(Home $home)
    {
        $this->home = $home;
    }
    public function get_signed_up()
    {
        return view('user.sign_complete');
    }
    public function get_investee_question_form(Request $request)
    {
        $plan = Plan::with('Market', 'Team', 'Traction', 'Competition', 'BusinessModel', 'CorporateStructure', 'ExistingFinancial', 'Financial', 'Fund', 'IntellectualProperty')
                    ->where('id' , $request->planId)
                    ->first();

        return view('user.questions.investee_questions')->with(['planId' => $request->planId , 'plan' => $plan ]);
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
        $plans = $this->home->get_home_details(0);
        return view('user.home')->with(['plans' => $plans]);
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
    public function analyst_delete_investee(Request $request)
    {
        try{
        $userId = $request->investeeId;

        User::where('id' , $userId)->delete();

        return response()->json(['success' => true , 'msg' => 'Investee Deleted Successfully']);

        } catch(\Exception $e){

            return response()->json(['success' => false , 'msg' => 'Something Went Wrong' , 'error' => $e->getMessage()]);
        }
    }
}
