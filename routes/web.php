<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\MainController;

Route::get('/', [MainController :: class, 'home'])
    ->name('home');


Route :: get('/person/show/{person}', [MainController :: class, 'personShow'])
    -> name('person.show');

Route :: get('/person/delete/{person}', [MainController :: class, 'personDelete'])
    -> name('person.delete');

Route :: get('/person/create', [MainController :: class, 'personCreate'])
    -> name('person.create');
Route :: post('/task/update/{task}', [MainController :: class, 'taskUpdate'])
    -> name('task.update');
Route :: post('/person/store', [MainController :: class, 'personStore'])
    -> name('person.store');

    Route :: get('/person/edit/{person}', [MainController :: class, 'personEdit'])
    -> name('person.edit');

Route :: post('/person/update/{person}', [MainController :: class, 'personUpdate'])
    -> name('person.update');