@extends('layouts.app')
@section('content')
    <h1>Coffee Club</h1>
    <h2>Here is a selection of our coffee</h2>

    @foreach($coffees as $coffee)
        <ul>
            <li>{{ $coffee->name }}</li>
        </ul>
    @endforeach
@endsection