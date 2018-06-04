<?php

Route::get('/produits', function () {
    $produits = \App\Tartes::all();
    return view('products.index', compact('produits'));
});
Route::get('/entreprise', function () {
    return view('entreprise');
});
Route::get('/contact', function () {
    return view('contact',compact('link'));
});
Route::resources([
    'Tartes' => 'ProduitsController'
]);

Route::get('/create','Produitscontroller@create');
Route::get('/edit', 'Produitscontroller@edit');
Route::get('/admin', function () {

    return view('auth.login');
});

Route::get('/test', function () {
    $produits = \App\Tartes::all();
    return view('testlayout', compact('produits'));
});

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');