<?php
namespace App\Http\Repository;
use App\Models\IntellectualProperty as IntellectualPropertyPlan;

class IntellectualProperty{
    
    public function add_intellectual_property_plan($request)
    {
        try{
            IntellectualPropertyPlan::updateOrCreate(
                ["plan_id" => $request->planId ],
                [
                'plan_id' => $request->planId,
                'unique_company' =>    $request->uniqueCompany ,
                'problem_solve' =>    $request->problemSolve ,
                'legal_risk' =>    $request->legalRisk ,
                'product_liability' =>    $request->productLiability ,
                'regulatory_risk' =>    $request->regulatoryRisk ,
                'intellectual_property' =>    $request->intellectualProperty ,
                'developed_intellectual_property' =>    $request->developedIntellectualProperty ,
                'person_left' =>    $request->personLeft ,
                'additional_partner' =>    $request->additionalPartner ,
                'current_intellectual_assets' =>    $request->currentIntellectualAssets 
            ]);
            return response()->json(["success" => true , "msg" =>"Intellectual Property Plan Added Successfully" ]);
        }
        catch(Exception $e)
        {
            return response()->json(["success" => false , "msg" =>"Error While Uploading Intellectual Property Plan" ]);
        }
    }
}