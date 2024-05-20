<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarService extends Model
{
    use HasFactory;

    public function car() {
        return $this->belongsTo(Car::class);
    }

    protected $fillable = [
        'car_id',
        'service_date',
        'is_notified'
    ];

    public static function index($id) {
        return CarService::where('car_id', $id)->orderBy('service_date', 'desc')->get();
    }

    public static function deleteCar($id) {
        CarService::where('car_id', $id)->delete();
    }
}
