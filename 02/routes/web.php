<?php

use App\Models\Expenses;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/form', function () {
    request()->validate([
        'description' => 'required',
        'amount' => 'required',
        'date' => 'required'
    ]);

   Expenses::create([
       'description' => request('description'),
       'amount' => request('amount'),
       'date' => request('date')
   ]);

   return redirect('/form');
});