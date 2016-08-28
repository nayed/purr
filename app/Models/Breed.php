<?php

namespace Purr\Models;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    public $timestamps = false;

    public function cats()
    {
        return $this->hasMany(Cat::class);
    }
}
