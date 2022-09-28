@extends('layouts.app')

@section('title', "register")


@section('content')

<div>
    <form method="POST"  action="{{ route('register') }}">

        @csrf

        <input type='text'
                name="username"
                value={{ old('username') }}>
            @error("username")
                <div>{{ $message }}</div>
            @enderror
        <input type="text"
               name="name"
               value="{{ old('name') }}"
               required>

            @error("email")
               <div>{{ $message }}</div>
            @enderror

        <input type='email' 
                placeholder="Enter your email" 
                name="email"
                value={{ old('email') }}
                >

        <input type="password"
               name='password'
               placeholder="Enter your password"
               required >
            @error("password")
                <div>{{ $message }}</div>
            @enderror
        <input type='password' 
               name="password_confirmation"
               placeholder="confirm password"
               required >
            @error("password_confirmation")
                <div>{{ $message }}</div>
            @enderror
        <input type='submit' 
        value="sign up" />

    </form>

</div>


@endsection