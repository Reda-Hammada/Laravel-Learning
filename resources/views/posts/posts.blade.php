@extends('layouts.app')


@section('title','posts page')


@section('content')

<h1>All Posts :</h1>
@forelse($posts as $post)
    <h2>{{ $post['title'] }}</h2>
    <p>{{ $post['id'] }}</p>
    <p>{{ $post['content'] }}</p>

@empty
    <p>Posts not found</p>
@endforelse

@endsection