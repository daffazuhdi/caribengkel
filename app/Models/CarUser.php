<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CarUser extends Pivot
{
    use HasFactory;

    public static function deleteCar($id) {
        CarUser::where('car_id', $id)->delete();
    }
}
