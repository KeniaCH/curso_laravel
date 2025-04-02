<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [];
    public function index(){
        return view('posts.index', [
            'posts' => $this->posts,
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
        $this->posts[] = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ];
        return redirect()->route('posts.index');
    }
}
