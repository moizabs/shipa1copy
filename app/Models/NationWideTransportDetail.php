<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NationWideTransportDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'nation_id',
        'heading',
        'description',
        'image',
    ];

    public function nationWideTransport()
    {
        return $this->belongsTo(NationWideTransport::class, 'nation_id');
    }
}
