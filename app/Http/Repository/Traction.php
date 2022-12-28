<?php
namespace App\Http\Repository;
use App\Models\Traction as TractionPlan;

class Traction{
    
    public function add_traction_plan($request)
    {

        try{
            TractionPlan::updateOrCreate(
                ["plan_id" => $request->planId ],
                [
                 "plan_id" => $request->planId,
                 "feedback" => $request->feedback,
                 "changes" => $request->changes,
                 "actual_user" => $request->actualUser,
                 "average_stay" => $request->averageStay,
                 "actual_sales" => $request->actualSales,
                 "annual_growth" => $request->annualGrowth,
                 "growth_rate" => $request->growthRate,
                 "growth_linear_consistent" =>$request->growthLinearConsistent,
                 "held_back" =>$request->heldBack,
                 "demonstration" =>$request->demonstration,
            ]);
    
            return response()->json(["success" => true , "msg" =>"Traction Plan Added Successfully" ]);
        }
        catch(Exception $e)
        {
            return response()->json(["success" => false , "msg" =>"Error While Uploading Traction Plan" ]);
        }
    }
}
