@extends('layouts.admin')

@section('content')

    <div class="container">

        <h1>Crea un nuovo post</h1>

        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
          </div>
        @endif
        

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input value="{{ old('title') }}" type="text" name="title" class="form-control @error('title') is-invalid
                @enderror" id="title" placeholder="titolo">
                @error('title')
                   <p> {{ $message }} </p>
                @enderror
              </div>
              <div class="mb-3">
                <label for="content" class="form-label">Descrizione</label>
                <textarea class="form-control @error('title') is-invalid
                @enderror" name="content" id="content" rows="3">{{ old('content') }}</textarea>
                @error('content')
                <p> {{ $message }} </p>
                @enderror
              </div>
              <button class="btn btn-success" type="submit">Invia</button>
              <button class="btn btn-secondary" type="reset">Reset</button>
        </form>

    </div>
    
@endsection