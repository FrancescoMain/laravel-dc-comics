@extends('layouts.main-layout')

@section('content')
    
    <h1>People</h1>
    <ul>
        @foreach ($people as $person)
            <li>{{ $person -> fristName }}</li>
        @endforeach
    </ul>

@endsection