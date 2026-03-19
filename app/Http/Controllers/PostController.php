<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(StorePostRequest $request)
    {
        Post::create($request->validate());
        return to_route('home');
    }
}
