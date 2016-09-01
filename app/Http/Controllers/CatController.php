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
        $cat->push('breed', $cat->breed->name);
        return ['cat' => $cat];
    }

    public function store(Request $request)
    {
        Cat::create($request->all());

        return redirect('api/cats');
    }

    public function update(Request $request, Cat $cat)
    {
        $cat->update($request->all());

        return redirect('api/cats/'.$cat->id);
    }

    public function destroy(Cat $cat)
    {
        $cat->delete();

        return redirect('api/cats');
    }
}
