@extends('layouts.app')

@section('title', 'post page')



@section('content')
@if($post['is_new'])
    <h1>A new blog post</h1>

@elseif(!$post['is_new'])

    <h1>blog post is old</h1>

@endif
    
<h1>{{ $post['title'] }}</h1>
<h2>{{ $post['content'] }}
@endsection 