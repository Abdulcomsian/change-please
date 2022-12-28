<?php
namespace App\Http\Repository;
use App\Models\Team as TeamPlan;

class Team{
    
    public function add_team_plan($request)
    {
        try{
            TeamPlan::updateOrCreate(
                ["plan_id" => $request->planId ],
                [
                'plan_id' => $request->planId,
                'headquarter' =>    $request->headquarter ,
                'founders' =>    $request->founders ,
                'team_members' =>    $request->teamMembers ,
                'board_members' =>    $request->boardMembers ,
                'roles' =>    $request->roles ,
                'experience' =>    $request->experience ,
                'right_person' =>    $request->rightPerson ,
                'motivation' =>    $request->motivation ,
                'founder' =>    $request->founder ,
                'responsible_idea' =>    $request->responsibleIdea ,
                
            ]);
            return response()->json(["success" => true , "msg" =>"Team Plan Added Successfully" ]);
        }
        catch(Exception $e)
        {
            return response()->json(["success" => false , "msg" =>"Error While Uploading Team Plan" ]);
        }
    }
}