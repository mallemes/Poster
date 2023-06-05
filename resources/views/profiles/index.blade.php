@extends('layouts.base')

@section('title', 'Profiles')

@section('content')

<h1>
    {{ $user->firstname }} {{ $user->surname }}

    <h1>{{ $user->isOnline() ? 'Online' : Carbon\Carbon::parse($user->last_seen_at)->diffForHumans() }}</h1>


</h1>

@endsection
