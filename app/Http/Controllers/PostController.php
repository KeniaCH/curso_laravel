<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = session('posts', []);
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {

        $posts = session('posts', []);
        $posts[] = [
            'id' => count($posts), // Generar un ID simple basado en la cantidad de posts
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ];
        
        session(['posts' => $posts]);
        return redirect()->route('posts.index');
    }
    public function show($id)
    {
        $posts = session('posts', []);
        $post = collect($posts)->firstWhere('id', $id);
        if (!$post) {
            abort(404);
        }
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
