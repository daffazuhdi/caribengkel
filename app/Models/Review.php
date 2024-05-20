<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }

    public static function averageRating($id) {
        // $workshop = Workshop::find($id);
        // $rating = DB::table('reviews')->where('workshop_id', $id)->avg('rating');
        $rating = Review::select('reviews.*')
                    ->leftJoin('workshops', 'reviews.workshop_id', '=', 'workshops.id')
                    ->leftJoin('specialties', 'reviews.specialty_id', '=', 'specialties.id')
                    ->where('reviews.workshop_id', $id)
                    ->whereIn('reviews.specialty_id', function ($query) use ($id) {
                        $query->select('specialty_workshop.specialty_id')
                            ->from('workshops')
                            ->leftJoin('specialty_workshop', 'workshops.id', '=', 'specialty_workshop.workshop_id')
                            // ->leftjoin('reviews', 'workshops.id', '=', 'reviews.workshop_id')
                            ->where('workshops.id', '=', $id);
                    })->get();

        // $facility = Review::where('specialty_id', '=', '0')
        //             ->where('reviews.workshop_id', $id);
        // $result = $rating->union($facility);
        $average = $result->avg('rating');
        // $ratingDetail = $result->paginate(15);
        $count = $rating->count();

        return [$count];
    }
}
