<?php
namespace App\Http\Repository;
use App\Models\Financial as FinancialPlan;

class Financial{
    
    public function add_financial_plan($request)
    {
        try{
            FinancialPlan::updateOrCreate(
                ["plan_id" => $request->planId ],
                [
                'plan_id' => $request->planId,
                'product_marketing' =>    $request->productMarketing ,
                'marketing_budget' =>    $request->marketingBudget ,
                'acquisition_cost' =>    $request->acquisitionCost ,
                'lifetime_value' =>    $request->lifetimeValue ,
                'equity_debt' =>    $request->equityDebt ,
                'fundraising' =>    $request->fundraising ,
                'burn_rate' =>    $request->burnRate ,
                'time_period' =>    $request->timePeriod ,
                'metrics_key' =>    $request->metricsKey ,
                'stock_options' =>    $request->stockOptions 
            ] );
            return response()->json(["success" => true , "msg" =>"Financial Plan Added Successfully" ]);
        }
        catch(Exception $e)
        {
            return response()->json(["success" => false , "msg" =>"Error While Uploading Financial Plan" ]);
        }
    }
}