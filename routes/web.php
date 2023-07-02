<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;



Route::fallback(function(){
    return "<h1>Sorry, the page you are looking for is not exist.</h1>";
});


Route::get('/', function () {
    return view('layouts.public');
})->name('layout.public');

Route::get('welcome', WelcomeController::class);



Route::controller(ContactController::class)->name('contacts.')->group(function (){
    Route::get('/contacts','index')->name('index');
    Route::get('/contacts/create','create')->name('create');
    Route::get('/contacts/{id}','show')->name('show');
});






