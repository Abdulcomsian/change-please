<?php

namespace App\Http\Repository;
use App\Models\Plan;

class Home{
    
    public function get_home_details($totalPlan){
        // $user = auth()->user();
        $planList = Plan::with('Market','BusinessModel','Competition','CorporateStructure','ExistingFinancial','Financial' , 'Fund' ,'IntellectualProperty', 'Team' ,'Traction')
                            ->orderBy('id','desc')
                            ->offset($totalPlan)->limit(6)->get();
        return $planList;
    }


}


?>