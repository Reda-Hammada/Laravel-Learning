@extends('layouts.app');


@section('content')

@foreach($users as $key => $user)

@if($loop->even)

<h3 style="background-color:blue">{{ $key }}.{{ $user['name'] }}</h3>
<p>{{ $user['occupation'] }}</p>


@else

<h3>{{ $key }}.{{ $user['name'] }}</h3>
<p>{{ $user['occupation'] }}</p>



@endif

@endforeach

@endsection