@extends('layouts.app')
@section('content')
    <h1>Coffee Club</h1>
    <h2>Current Members</h2>

    @foreach($famousDrinkers as $famousDrinker)
        <ul>
            <li>{{ $famousDrinker }}</li>
        </ul>
    @endforeach
@endsection