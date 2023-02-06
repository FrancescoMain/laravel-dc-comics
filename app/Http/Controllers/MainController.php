<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainController extends Controller
{
    
    public function home() {

        $people = Person :: all();


        return view('pages.home', compact('people'));
    }

    public function personShow(Person $person) {

        return view('pages.personShow', compact('person'));
    }

    public function personDelete(Person $person) {

        $person -> delete();
    
        return redirect() -> route('home');
    }

    public function personCreate() {

        return view('pages.personCreate');
    }

    public function personStore(Request $request) {

        $data = $request -> validate([
            'fristName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'date',
            'heigth' => 'nullable|integer|min:150|max:220',
        ]);
    
        $person = new Person();
    
        $person -> fristName = $data['fristName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> heigth = $data['heigth'];
    
        $person -> save();
    
        return redirect() -> route('home');
    }
    public function personEdit(Person $person) {

        return view('pages.personEdit', compact('person'));
    }

    public function personUpdate(Request $request, Person $person) {

        $data = $request -> validate([
            'fristName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'date',
            'heigth' => 'nullable|integer|min:150|max:220',
        ]);
    

        $person -> fristName = $data['fristName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> heigth = $data['heigth'];
    
        $person -> save();
    
        return redirect() -> route('home');
    }
}
