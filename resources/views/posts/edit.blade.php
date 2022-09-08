@extends('layouts.app')
  
@section('title','edit post')

@section('content')


<form method='POST' action={{route('Resourceposts.update',[$post['id']]) }} >
 
    @csrf

    @method('PATCH')

    <div>
        <input type='text'  value="{{ $post['title'] }}" name='title' />
    </div>
    <div>
        <input type='text'   value="{{ $post['content'] }}" name="content"/>
    </div>
            <input type='submit' value='update' />
</form>

@endsection