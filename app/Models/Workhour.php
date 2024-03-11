<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workhour extends Model
{
    use HasFactory;

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}
