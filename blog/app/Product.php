<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //creating model
    return $this->hasMany(Description::class);
    //
}
