<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function car_model(){
        return $this->belongsTo(CarModel::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function car_services()
    {
        return $this->hasMany(CarService::class);
    }
}
