<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortToPort extends Model
{
    use HasFactory;

    protected $fillable = [
        'pickup_country',
        'pickup_zipcode',
        'pickup_latitude',
        'pickup_longitude',
        'delivery_country',
        'delivery_zipcode',
        'delivery_latitude',
        'delivery_longitude',
        'price',
    ];
}
