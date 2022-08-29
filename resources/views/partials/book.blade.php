@extends('layouts.app')


@section('content')

@php print_r($book) @endphp

@if($loop->odd)

<h1>{{ $key }} . {{ $book['title'] }}</h1>

<h2>{{ $book['body'] }}</h2>

@else 

<h1>{{ $key }} . {{ $book['title'] }}</h1>

<h2>{{ $book['body'] }}</h2>

@endif

@endsection 