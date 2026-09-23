<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function reviewImages()
    {
        return $this->hasMany(ReviewImage::class);
    }
}
