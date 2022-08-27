@extends('layouts.app')



@section('content')

    {{-- @each('partials.book', $books , 'book') --}}


    {{-- including a view  --}}

    @foreach($books as $key => $book)

     @include('partials.book')

    @endforeach



@endsection