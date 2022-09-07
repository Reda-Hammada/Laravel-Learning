@extends('layouts.app');

@section('title', 'create post')


@section('content')

<form method="POST" action="{{ route('Resourceposts.store') }}">

    @csrf

    <div>

        <input type='text' name='title' value="{{ old('title') }}" />

    </div>

    @error('title')
        <div>{{ $message }}</div>
    @enderror

    <div>

        <textarea name='content' >

            {{ old('content') }}

        </textarea>

    </div>

    @error('content')
    <div>{{ $message }}</div>
    @enderror

    <div>
        <input type='submit' value='create post'/>
    </div>
    

</form>

@endsection