<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopPrice extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Price::class);
    }

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
