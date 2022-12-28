<?php
namespace App\Http\Repository;
use App\Models\Competitions as CompetitionPlan;

class Competition{
    
    public function add_competition_plan($request)
    {
        try{
            CompetitionPlan::updateOrCreate(
                ["plan_id" => $request->planId ],
                [
                'plan_id' => $request->planId,
                'competitors' =>    $request->competitors ,
                'advantages' =>    $request->advantages ,
                'disadvantages' =>    $request->disadvantages ,
                'barriers' =>    $request->barriers ,
                'letting_down' =>    $request->lettingDown ,
                'competitors_not_done' =>    $request->competitorsNotDone ,
                'differ_feature' =>    $request->differFeature ,
                'compare_price' =>    $request->comparePrice ,
                'compare_service' =>    $request->compareService ,
                'customer_satisfaction' =>    $request->customerSatisfaction 
            ]);
            return response()->json(["success" => true , "msg" =>"Competition Plan Added Successfully" ]);
        }
        catch(Exception $e)
        {
            return response()->json(["success" => false , "msg" =>"Error While Adding Competition Plan" ]);
        }
    }
}