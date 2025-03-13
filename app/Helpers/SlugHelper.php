<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use App\Models\NationWideTransport;

class SlugHelper
{
    public static function createUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = NationWideTransport::where('slug', 'LIKE', "{$slug}%")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
