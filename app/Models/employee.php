<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    public function vehicle()
    {
        return $this->hasOne(vehicle::class);
    }


     public function manager()
    {
        return $this->belongsTo(manager::class);
     }

     public function foodcoupons()
    {
        return $this->belongsToMany(foodcoupon::class);
    }
}