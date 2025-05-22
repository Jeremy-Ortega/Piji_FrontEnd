<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

//for viewing pages only
Route::get('/landing',function () {return view('pages/landing');})->name('landing');

Route::get('/register',function () {return view('pages/register');})->name('register');
Route::get('/login',function () {return view('pages/login');})->name('login');

Route::get('/dashboard',function () {return view('pages/dashboard');})->name('dashboard');


