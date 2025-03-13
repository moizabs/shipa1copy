<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;

    protected $table = 'marketing';

    protected $fillable = [
        'slug',
        'img_one',
        'heading_one',
        'img_thumbnail',
        'desc_one',
        'heading_two',
        'desc_two',
        'img_two',
        'heading_three',
        'desc_three',
        'img_three',
        'category',
        'status',
    ];
}
