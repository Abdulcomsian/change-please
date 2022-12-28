<?php
namespace App\Http\Repository;
use App\Models\CorporateStructure as CorporateStructurePlan;

class CorporateStructure{
    
    public function add_corporate_structure_plan($request)
    {
        try{
            CorporateStructurePlan::updateOrCreate(
                ["plan_id" => $request->planId ],
                [
                'plan_id' => $request->planId,
                'organized_company' =>    $request->organizedCompany ,
                'hold_titles' =>    $request->holdTitles ,
                'split_shares' =>    $request->splitShares ,
                'existing_board' =>    $request->existingBoard ,
                'registered_company' =>    $request->registeredCompany ,
                'account_handling' =>    $request->accountHandling ,
                'talent_skills' =>    $request->talentSkills ,
                'selected_founder' =>    $request->selectedFounder ,
                'employee_selector' =>    $request->employeeSelector ,
                'registered_agent' =>    $request->registeredAgent 
            ]);
            return response()->json(["success" => true , "msg" =>"Corporate Structure Plan Added Successfully" ]);
        }
        catch(Exception $e)
        {
            return response()->json(["success" => false , "msg" =>"Error While Uploading Corporate Structure Plan" ]);
        }
    }
}