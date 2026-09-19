<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderImage extends Model
{
    protected $table = "order_image";
    protected $fillable = ['order_id', 'image'];

}
