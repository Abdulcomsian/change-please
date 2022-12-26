<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    DashboardController,
    AnalystController,
    InvesteeController,
    BusinessModelController,
    CompetitionController,
    CorporateStructureController,
    ExistingFinancialRoundController,
    FinancialController,
    FundsController,
    IntellectualPropertyController,
    MarketController,
    TeamController,
    TractionController,
    UserController,
    PlanController
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// user route starts here
Route::group(['middleware' => 'auth'] , function(){

    Route::get('/signed-up' , [UserController::class , 'get_signed_up'])->name('user.signed_up');
    Route::post('/add-market' , [MarketController::class ,'add_market'])->name('market.add_market');

});
Route::get('/investee-questions/{planId}', [UserController::class , 'get_investee_question_form'])->name('user.investee_question_form');
Route::get('/general-information' , [UserController::class , 'get_general_information'])->name('user.general_information');
Route::get('/done' , [UserController::class , 'get_done'])->name('user.done');
Route::get('/services' , [UserController::class ,'get_service'])->name('user.service');
Route::get('/offerings' , [UserController::class , 'get_offerings'])->name('user.offerings');
Route::get('/home' , [UserController::class ,'get_home'])->name('user.home');
Route::get('/filter' , [UserController::class ,'get_filter'])->name('user.filter');
Route::get('/invester-information' ,[UserController::class, 'get_invester'])->name('user.invester');
Route::get('/plan' ,[UserController::class , 'get_plan_statistics'])->name('user.plan');
Route::get('/investee-profile' , [UserController::class , 'get_investee_profile'])->name('user.investee_profile');
Route::get('/answer' , [UserController::class , 'get_investee_answers'])->name('user.answer');
Route::get('/logout' , [App\Http\Controllers\Auth\LoginController::class , 'logout'])->name('user.logout');




Route::post("add-plan" , [PlanController::class , 'add_plan'])->name('plan.add');















// user route ends here

Route::group( ["prefix" => "admin"] , function(){
    Route::group(['middleware' => "admin.guest"] , function(){
        Route::view("/login" , "admin_auth.admin_login")->name('admin.login');
        Route::post("/authenticate-admin" , [AdminController::class , 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => "admin.authenticate"] , function(){
        Route::get('/' , [DashboardController::class , 'get_admin_dashboard'])->name('admin');
        Route::get('/home', [DashboardController::class , 'get_admin_dashboard'])->name('admin.dashboard');
        Route::get('/analyst-list' , [AnalystController::class , 'get_analyst'])->name('admin.analyst');
        Route::get('/logout' , [AdminController::class , 'logout'])->name('admin.logout');
        
        // Route::get('/home' , [AdminController::class , 'home'])->name('admin.dashboard');
        // Route::get('/' , [AdminController::class , 'home'])->name('admin');
    });
});


Route::group(["prefix" => "analyst"] , function(){
    Route::group(["middleware" => "analyst.guest"] , function(){
        Route::view('/login' , "analyst_auth.analyst_login")->name('analyst.login');
        Route::post('/authenticate-analyst' , [AnalystController::class , 'authenticate'])->name('analyst.authenticate');
    });

    Route::group(['middleware' => 'analyst.authenticate'] , function(){
        Route::get("/" , [DashboardController::class , 'get_analyst_dashboard' ])->name('analyst');
        Route::get("/home" , [DashboardController::class , 'get_analyst_dashboard' ])->name('analyst.dashboard');
        Route::get("/investee-list",[InvesteeController::class , 'get_investee'])->name('analyst.investee');
        Route::group(["prefix"=>"investee"], function(){
            Route::get("/business-model" ,[BusinessModelController::class,'get_business_model'])->name('analyst.business_model');
            Route::get("/competition",[CompetitionController::class ,'get_competition'])->name('analyst.competition');
            Route::get("/corporate-structure",[CorporateStructureController::class ,'get_corporate_structure_controller'])->name('analyst.corporate_structure');
            Route::get("/existing-financial-round",[ExistingFinancialRoundController::class , 'get_existing_financial_round'])->name('analyst.existing_financial_round');
            Route::get("/financial",[FinancialController::class , 'get_financial'])->name('analyst.financial');
            Route::get("/funds",[FundsController::class , 'get_funds'])->name('analyst.funds');
            Route::get("/intellectual-property" ,[IntellectualPropertyController::class , 'get_intellectual_property'])->name('analyst.intellectual_property');
            Route::get("/market" ,[MarketController::class,'get_market'])->name('analyst.market');
            Route::get("/team" ,[TeamController::class , 'get_team'])->name('analyst.team');
            Route::get("/traction" ,[TractionController::class , 'get_traction'])->name('analyst.traction');
        });
        
        Route::get('/logout' , [AnalystController::class , 'logout'])->name('analyst.logout');
    });

});
