<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopPrice extends Model
{
    use HasFactory;

    protected $fillable = ['workshop_id', 'service_id', 'price'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
