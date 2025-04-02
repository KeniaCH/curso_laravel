@extends('layout.app')

    <diV class="d-flex justify-content-between align-items-center flex-column">
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Crear nuevo post</a>
    </diV>

    @foreach ($posts as $post)
        <div class="container ">
            <li>

                <a href="{{ route('posts.show', $post["id"]) }}">
                    {{ $post["title"] }}
            </li>
        </div>
    
    @endforeach

