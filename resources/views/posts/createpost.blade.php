@extends('layouts.app');

@section('title', 'create post')


@section('content')

<form method="POST" action="{{ route('Resourceposts.store') }}">

    @csrf

    <div>

        <input type='text' name='title' />

    </div>
    <div>

        <textarea name='content'>

        </textarea>
    </div>
    <div>
        <input type='submit' value='create post'/>
    </div>
    

</form>

@endsection