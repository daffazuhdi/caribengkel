<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{

    use HasFactory;

    protected $fillable = ['name', 'subdistrict_id', 'address', 'photo', 'phone_number', 'about'];

    public function subdistrict()
    {
        return $this->belongsTo(Subdistrict::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class);
    }

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }

    public function car_brands()
    {
        return $this->belongsToMany(CarBrand::class);
    }

    public function prices()
    {
        return $this->hasMany(WorkshopPrice::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function workhours()
    {
        return $this->hasMany(Workhour::class);
    }
}
