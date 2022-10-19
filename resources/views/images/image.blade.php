@extends('layouts.app')


@section('title','upload_image_view_example')

@section('content')
<h1>Upload Image</h1>
<form method="POST" action="{{ route('Image.store')}} " enctype="multipart/form-data"> 
 @csrf
 <input type ='file' name='image' >
 <input type='submit' value='submit' name='submit' >
</form>


@endsection