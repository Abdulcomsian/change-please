<?php
namespace App\Http\Repository;
use App\Models\BusinessModel as BusinessPlan;

class BusinessModel{
    
    public function add_business_model_plan($request)
    {
        try{
            BusinessPlan::updateOrCreate(
                ["plan_id" => $request->planId ],
                [
                'plan_id' => $request->planId,
                'specific_channels' =>    $request->specificChannels ,
                'marketing_channels' =>    $request->marketingChannels ,
                'plan_b' =>    $request->planB ,
                'profit_margin' =>    $request->profitMargin ,
                'scalling_impact' =>    $request->scallingImpact ,
                'pivots' =>    $request->pivots ,
                'replaceable' =>    $request->customerStory ,
                'customer_story' =>    $request->replaceable ,
                'unique_feature' =>    $request->uniqueFeature ,
                'revenue_stream' =>    $request->revenueStream 
            ]);
            return response()->json(["success" => true , "msg" =>"Business Model Plan Added Successfully" ]);
        }
        catch(Exception $e)
        {
            return response()->json(["success" => false , "msg" =>"Error While Adding Business Model Plan " ]);
        }
    }
}