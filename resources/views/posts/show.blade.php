@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $post["title"] }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $post["body"] }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@endsection