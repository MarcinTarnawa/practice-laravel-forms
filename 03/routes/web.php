<?php

use App\Models\Category;
use App\Models\Expenses;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['expenses' => Expenses::all()]);
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/form', function () {
    request()->validate([
        'description' => ['required', 'string', 'max:255'],
        'amount' => 'required',
        'date' => 'required',
        'category' => ['required' , 'string']
    ]);

    $category = Category::firstOrCreate([
        'name' => request('category')
    ]);

    Expenses::create([
        'description' => request('description'),
        'amount' => request('amount'),
        'date' => request('date'),
        'category_id' => $category->id
    ]);

   return redirect('/form');
});