@extends('layouts.app')

@section('content')

@if (Session::has('status'))
	{{ Session::get('status') }}
@endif

    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <a href="{{ route('articles.show', $article) }}"><h2>{{$article->name}}</h2></a>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
