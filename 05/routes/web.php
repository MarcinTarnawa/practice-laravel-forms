<?php

use Illuminate\Support\Facades\Route;

//Index
Route::get('/', function () {
    return view('welcome');
});


//Test Form
Route::get('/form', function () {
    return view('form');
});

Route::post('/form', function () {
    request()->validate([
        'name' => ['required', 'string', 'min:3', 'max:255']
    ]);
    @dd(request()->all());

    return view('form');
});