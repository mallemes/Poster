@extends('layouts.base')

@section('title', 'Profiles')

@section('content')
    <h1>This is my account</h1>
    <h1>
        {{ $user->firstname }} {{ $user->surname }}

        <h1>{{ $user->isOnline() ? 'Online' : 'Offline' }}</h1>

    </h1>

@endsection
