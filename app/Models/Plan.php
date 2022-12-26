<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{ 
    User,
    Market
 };

class Plan extends Model
{
    use HasFactory;
    protected $table = "plans";
    protected $primaryKey = "id";
    protected $fillable = [ "user_id", "company_name", "size", "country", "city", "category","address","postal_code","company_logo","video", "status" ];

    public function Investee()
    {
        return $this->belongsTo(User::class , 'user_id' , "id");
    }

    public function Market()
    {
        return $this->hasOne(Market::class , 'plan_id' ,'id');
    }

}
