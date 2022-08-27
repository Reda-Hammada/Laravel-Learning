@extends('layouts.app');


@section('content')

@foreach($users as $key => $user)

@if($loop->remaining)

<h3 style="background-color:blue">{{ $key }}.{{ $user['name'] }}</h3>
<p>{{ $user['occupation'] }}</p>


@else

<h3>{{ $key }}.{{ $user['name'] }}</h3>
<p>{{ $user['occupation'] }}</p>



@endif



@endforeach

@php 

$randomNumber = random_int(0,100);

echo $randomNumber;


@endphp


@php $done = false @endphp

@while($done == false)

<div>It is done</div>
@break

@endwhile


@endsection