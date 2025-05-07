<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;

Route::get('/', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');//you need to be signed in to see this
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');//you need to be signed in to see this

Route::get('/search', SearchController::class);//goes to _invoke method
Route::get('/tags/{tag:name}', TagController::Class);//explicitly saying that the name of the tag is the "name" attribute of the tag in the database, if we don't do this, it will look for the id of the tag in the database

Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');//you need to be signed in to see this