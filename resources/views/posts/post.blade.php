@extends('layouts.app')

@section('title', 'post page')



@section('content') 
<h1>{{ $post['title'] }}</h1>
<h2>{{ $post['content'] }}
@endsection 