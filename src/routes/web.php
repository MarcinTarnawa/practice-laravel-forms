<?php

use App\Models\Category;
use App\Models\Expenses;
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


// 1. STRONA GŁÓWNA
Route::get('/expenses', function () {
    $expenses = Expenses::with('category')->latest()->simplePaginate(3);
    return view('expenses.index', ['expenses' => $expenses]);   
});

// 2. FORMULARZ DODAWANIA (WIDOK)
Route::get('/expenses/create', function () {
    return view('expenses.create');
});

// 3. ZAPISYWANIE NOWEGO WYDATKU
Route::post('/expenses', function () {
    request()->validate([
        'description' => ['required', 'string', 'min:3', 'max:255'],
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

    return redirect('/expenses'); 
});

// 4. USUWANIE
Route::delete('/expenses/{expense}', function (Expenses $expense) {
    $expense->delete();
    return back();
});

// 5. EDYCJA (WIDOK)
Route::get('/expenses/{expense}/edit', function (Expenses $expense) {
    $categories = Category::all();
    return view('expenses.edit', compact('expense', 'categories'));
});

// 6. EDYCJA
Route::patch('/expenses/{expense}', function (Expenses $expense) {
    $data = request()->validate([
        'description' => 'required|string|min:3|max:255',
        'amount'      => 'required|numeric',
        'date'        => 'required|date',
        'category'    => 'required|string'
    ]);

    $category = Category::firstOrCreate([
        'name' => $data['category']
    ]);

    $expense->update([
        'description' => $data['description'],
        'amount'      => $data['amount'],
        'date'        => $data['date'],
        'category_id' => $category->id
    ]);

    return redirect('/expenses');
});
