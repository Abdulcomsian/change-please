<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\Plan;

class PlanController extends Controller
{
    protected $plan;

    public function __construct(Plan $plan)
    {
        $this->plan = $plan;
    }

    protected $rule = [
                    "company_name" => "required",
                    "size" => "required",
                    "country" => "required",
                    "city" =>"required",
                    "logo" =>"required|file|mimes:jpg,png,jpeg,jfif,gif,hevc,heif,JPG,PNG,JPEG,jfif,GIF,HEVC,HEIF"
                ];

    public function add_plan(Request $request)
    {   
        $request->validate($this->rule);

        return $this->plan->add_user_plan($request);

    }

    public function get_user_plans(Request $request)
    {   
        return view('user.plan');
    }
}
