@extends('layouts.main-layout')

@section('content')
    
    <h1>Name: {{ $person -> fristName }}</h1>
    <h1>LastName: {{ $person -> lastName }}</h1>
    <h2>Date of birth: {{$person -> dateOfBirth}}</h2>
    <h2>Heigth:
        {{ 
            $person -> heigth 
            ? $person -> heigth 
            : "- no hegth -"
        }}
    </h2>

@endsection