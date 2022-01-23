<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;

trait SlugTrait
{

    public function setNameAttribute($slug)
    {
        $this->slug = Str::slug($slug);
    }
}
