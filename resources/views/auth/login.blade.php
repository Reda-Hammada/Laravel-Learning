@extends('layouts.app')

@section('title', "Login")


@section('content')

<div>
    <form method="POST"  action="{{ route('login') }}">

        @csrf

        <div>
            <input type='text'
                   name="email"
                   placeholder="Enter your email"
                   value={{old('email')}} >
        </div>
        <div>
            <input type="password"
                   name="password"
                   placeholder="Enter your password ">
        </div>
        <div>
            <input type='checkbox'
                    placeholder="remember me"
                    name='remember' >
                    <label>Remember me</label>

        </div>
        <div>
            <input type='submit'
                   value="Log in" >
        </div>  

    </form>

</div>


@endsection