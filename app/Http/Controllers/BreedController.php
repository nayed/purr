<?php

namespace Purr\Http\Controllers;

use Illuminate\Http\Request;

use Purr\Http\Requests;
use Purr\Models\Breed;

class BreedController extends Controller
{
    public function show(Breed $breed)
    {
        return $breed;
    }
}
