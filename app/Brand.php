<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Car;

class Brand extends Model
{
    use softDeletes;

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    /**     * The attributes that are mass assignable.
     *
     *
     *
     * @var array*/
    protected $fillable = [
        'name'];
}
