@extends('layouts.base')

@section('title', 'Profiles')

@section('content')

<div class="main-content">
    <h1>
        {{ $user->firstname }} {{ $user->surname }}

        <h1>{{ $user->is_online ? 'Online' : Carbon\Carbon::parse($user->last_seen_at)->diffForHumans() }}</h1>


    </h1>
</div>

@endsection
