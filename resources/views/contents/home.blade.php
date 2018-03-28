@extends('layouts.app')
@section('content')
    <h1>Home of the Coffee Club</h1>
    <p>Welcome to the neighborhood coffee club. Here is a list of this week's coffee.</p>

    @foreach($coffees as $coffee)
        <ul>
            <li>{{ $coffee }}</li>
        </ul>
    @endforeach
@endsection