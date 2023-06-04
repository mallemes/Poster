@extends('layouts.base')

@section('title', 'Login')


@section('content')

    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button>Login</button>
    </form>

@endsection
