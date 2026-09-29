<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderImages()
    {
        return $this->hasMany(OrderImage::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
