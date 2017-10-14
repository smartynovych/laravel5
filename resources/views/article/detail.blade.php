@extends ('layout')

@section ('content')

    <h2>{{ $article->name }}</h2>

    <span>{{ $article->created_at->format('d.m.Y H:i') }}</span>

    <p class="text-md-left">{{ $article->description }}</p>

    <a href="/article/" class="btn btn-primary">Back to the article list</a>

@endsection
