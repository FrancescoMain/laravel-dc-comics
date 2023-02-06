@extends('layouts.main-layout')

@section('content')
    
    <h1>New Person</h1>
    <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="name">First Name</label>
        <input type="text" name="fristName">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName">
        <br>
        <label for="dateOfBirth">Date of Birth</label>
        <input type="date" name="dateOfBirth">
        <br>
        <label for="heigth">Heigth</label>
        <input type="number" name="heigth">
        <br>
        <input type="submit" value="CREATE NEW PERSON">
    </form>

@endsection