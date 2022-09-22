@extends('layouts.app')

@section('title', 'post page')



@section('content') 
<h1>{{ $post['title'] }}</h1>
<h2>{{ $post['content'] }}
    <p>{{ $author['name'] }}
    <form action ="{{ route('Resourceposts.destroy',[$post['id']])}} "  method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
    </form>

@endsection 