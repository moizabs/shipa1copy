<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationWideTransport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'status',
    ];

    public function details()
    {
        return $this->hasMany(NationWideTransportDetail::class, 'nation_id');
    }
}