<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'label'];

    public function origin(){
        return $this->belongsTo(Origin::class);
    }

    public function car_models(){
        return $this->hasMany(CarModel::class);
    }

    public function workshops()
    {
        return $this->belongsToMany(Workshop::class);
    }
}
