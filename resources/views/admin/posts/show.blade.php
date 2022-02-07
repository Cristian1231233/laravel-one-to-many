@extends('layouts.admin')

@section('content')

    <div class="container">
       
            <div>Show</div>
            <h1>{{ $post->title }}</h1>
            @if ($post->category)
                <h2>Categoria: {{ $post->category->name }}</h2>
            @endif
            <div><strong>Descrizione:</strong> {{ $post->content }}</div>
            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-success">Edit</a>
            <button class="btn btn-danger">Delete</button>
    </div>
    
@endsection