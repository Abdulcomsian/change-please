<?php

namespace App\Http\Repository;
use App\Models\Plan;

class Home{
    
    public function get_home_details($totalPlan){
        $user = auth()->user();
        $planList = Plan::orderBy('id','desc')->offset($totalPlan)->limit(1)->get();
        return $planList;
    }


}


?>