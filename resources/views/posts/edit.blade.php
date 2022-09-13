@extends('layouts.app')
  
@section('title','edit post')

@section('content')


<form method='POST' action={{route('Resourceposts.update',[$post['id']]) }} >
 
    @csrf

    @method('PATCH')

    <div>
        <input type='text'  value="{{ $post['title'] }}" name='title' />
    </div>
    
    @error('title')
        <div>{{ $message }}</div>
    @enderror
    <div>
        <input type='text'   value="{{ $post['content'] }}" name="content"/>
    </div>
    @error('content')
    <div>{{ $message }}</div>
@enderror
            <input type='submit' value='update' />
</form>

@endsection