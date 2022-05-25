<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Brand;

class Car extends Model
{
    use softDeletes;

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
