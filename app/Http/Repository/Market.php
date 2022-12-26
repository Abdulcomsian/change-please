<?php
namespace App\Http\Repository;
use App\Models\Market as MarketPlan;

class Market{
    public function add_market_plan($request)
    {
        try{
            MarketPlan::create([
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
            
            return redirect()->back()->with("market_success" , "Market Plan Added Successfully");
        }
        catch(Exception $e)
        {
            return redirect()->back()->with("market_error" , "Something Went Wrong While Adding Market Plan");   
        }
    }
}