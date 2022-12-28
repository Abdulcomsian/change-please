<?php
namespace App\Http\Repository;
use App\Models\Funds as FundsPlan;

class Funds{
    
    public function add_funds_plan($request)
    {
        try{
            FundsPlan::updateOrCreate(
                ["plan_id" => $request->planId ],
                [
                'plan_id' => $request->planId,
                'funds_allocated' =>    $request->fundsAllocated ,
                'spent' =>    $request->spent ,
                'expansion' =>    $request->expansion ,
                'not_recieved_money' =>    $request->notRecievedMoney ,
                'asset_invested' =>    $request->assetInvested ,
                'milestones' =>    $request->milestones ,
                'biggest_risks' =>    $request->biggestRisks ,
                'raising_capitals' =>    $request->raisingCapitals ,
                'fundraising_efforts' =>    $request->fundraisingEfforts ,
                'personal_expenses' =>    $request->personalExpenses 
            ]);
            return response()->json(["success" => true , "msg" =>"Funds Plan Added Successfully" ]);
        }
        catch(Exception $e)
        {
            return response()->json(["success" => false , "msg" =>"Error While Uploading Funds Plan" ]);
        }
    }
}