@extends('layouts.app')

@section('content')
    @foreach ($articles as $article)
        <h2>{{ $article->name }}</h2>
        <p>{{ $article->body }}</p>
    @endforeach
@endsection
