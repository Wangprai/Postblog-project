<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('register');
});

// Route::get('/' ,[Controller])->name->('index');