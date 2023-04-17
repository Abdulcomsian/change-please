<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;

class InvesteeController extends Controller
{
    public function get_investee()
    {
        return view('analyst.investee');
    }

    public function get_investee_list()
    {
        $users = User::where( 'role', 1 )->orderBy('id' , 'desc')->get();
        
        return DataTables::of($users)
                          ->addColumn('name' , function($user){
                            return $user->name;
                          })
                          ->addColumn('email' , function($user){
                            return $user->email;
                          })
                          ->addColumn('status' , function($user){
                            return $user->status;
                          })
                          ->addColumn('action' , function($user){
                            return '<a href="javascript:void(0)"><i class="fas fa-trash-alt delete-investee" data-investee-id="'.$user->id.'"></i></a><a href="javascript:void(0)"><i class="fas fa-eye view-investee-plan" data-investee-id="'.$user->id.'"></i></a>';
                          })
                          ->make(true);
    }
}
