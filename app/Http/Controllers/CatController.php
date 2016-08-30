<?php

namespace Purr\Http\Controllers;

use Illuminate\Http\Request;

use Purr\Http\Requests;

use Purr\Models\Cat;

class CatController extends Controller
{
    public $cats = [];

    public function index()
    {
        return ['cats' => Cat::all()->map(function($item, $key) {
            $cat = Cat::findOrFail($item->id);
            $cat->push('breed', $cat->breed->name);

            return $cat;
        })];
    }

    public function show(Cat $cat)
    {
        return ['cat' => $cat];
    }
}
