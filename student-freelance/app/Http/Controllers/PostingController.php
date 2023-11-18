<?php

namespace App\Http\Controllers;

use App\Models\Posting;

class PostingController extends Controller
{

    public function create()
    {
        return view('create-posting');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'budget' => 'gt:0',
        ]);

        $user = Posting::create(array_merge($attributes, ['employer_id' => auth()->user()->id]));

        return redirect("/posting/{$user->id}")->with('success', 'New posting created succesfully');
    }
}
