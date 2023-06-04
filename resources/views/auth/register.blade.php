@extends('layouts.base')

@section('title', 'Register')

@section('content')

    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="text" placeholder="Firstname" name="firstname">
        <input type="text" placeholder="Surname" name="surname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="Email" name="email">
        <select name="day">
            <option value="0">Day</option>
            @for($i = 1; $i <= 31; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

        <select name="month" id="">
            <option value="0">Month</option>
            @for($i = 1; $i <= 12; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

        <select name="year" id="">
            <option value="0">Year</option>
            @for($i = 2021; $i >= 1900; $i--)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <input type="password" placeholder="Password" name="password">
        <input type="password" placeholder="Confirm Password" name="password_confirmation">


        <button>Register</button>
    </form>

@endsection
