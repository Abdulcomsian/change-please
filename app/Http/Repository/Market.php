<?php
namespace App\Http\Repository;
use App\Models\Market as MarketPlan;

class Market{
    public function add_market_plan($request)
    {
        try{
           $market =  MarketPlan::updateOrCreate(
                ["plan_id" => $request->planId ],
                [
                 "plan_id" => $request->planId,
                 "market_opportunity" => $request->marketOpportunity,
                 "market_share" => $request->marketShare,
                 "customer" => $request->bestCustomer,
                 "time_taken" => $request->timeTaken,
                 "figures" => $request->figures,
                 "pr_strategy" => $request->prStrategy,
                 "aspire" => $request->aspire,
                 "least_like" =>$request->leastLike,
                 "right_time" =>$request->rightTime,
                 "strategy" =>$request->marketStrategy,
                 "status" => "Pending",
            ]);
            return response()->json(["success" => true , "msg" =>"Market Plan Added Successfully" ]);
        }
        catch(Exception $e)
        {
            return response()->json(["success" => false , "msg" =>"Market Plan Added Successfully" ]);
        }
    }
}