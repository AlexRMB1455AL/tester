<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrRequest;
use App\Models\Post;



class PostController extends Controller
{
    public function store(RegistrRequest $request)
    {
        $validated = $request->validated();

        Post::create($validated);
        return to_route('home');
    }
}
