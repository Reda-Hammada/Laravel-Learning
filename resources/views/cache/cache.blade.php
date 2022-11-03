
@extends('layouts.app')

@section('title','cache example')

@section('content')
<h1>Cache example</h1>
<div>
    @foreach ($posts as  $post)
            <div>{{ $post['title'] }}</div>
    @endforeach
</div>

@endsection