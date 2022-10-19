@extends('layouts.app')


@section('title','posts page')


@section('content')

<h1>All Posts :</h1>
<a href={{ route('Resourceposts.create') }}>Create</a>
@foreach($posts as $post)
    <h2>{{ $post['title'] }}</h2>
    <button><a href={{ route('Resourceposts.edit',[$post['id']])}}>Edit</a></button>
    <p>{{ $post['content'] }}</p>
    <button><a href={{ route('Resourceposts.show',[$post['id']])}}>post</a></button>



@endforeach

@endsection