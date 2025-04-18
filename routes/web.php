<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Display Home Page
Route::get('/', [ListingController::class, 'index']);
// Manage Job
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth')->middleware('auth');

// Single listing
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// Store Job 
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Edit Job
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Job
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Display Jon
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Users
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class,'store']);

Route::post('/logout', [UserController::class,'logout'])->middleware('auth');
// Display login page
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

Route::post('/users/auth', [UserController::class,'auth'])->middleware('guest');