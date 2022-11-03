
@extends('layouts.app')

@section('title','cache example')

@section('content')
<h1>Cache example</h1>
@foreach ($posts as $post )
    <div>{{ $post }}</div>
@endforeach

@endsection