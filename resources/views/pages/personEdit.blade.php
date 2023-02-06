@extends('layouts.main-layout')

@section('content')
    
    <h1>New Person</h1>
    <form method="POST" action="{{ route('person.update', $person) }}">
        @csrf
        <label for="fristName">First Name</label>
        <input type="text" name="fristName" value="{{$person -> fristName}}">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" value="{{$person -> lastName}}">
        <br>
        <label for="dateOfBirth">Date of Birth</label>
        <input type="date" name="dateOfBirth" value ="{{$person -> dateOfBirth}}">
        <br>
        <label for="heigth">Heigth</label>
        <input type="number" name="heigth" value="{{$person -> heigth}}">
        <br>
        <input type="submit" value="CREATE NEW PERSON">
    </form>

@endsection