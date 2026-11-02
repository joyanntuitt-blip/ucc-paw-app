<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ucc-paw-app');
});

// Route Pathway to the faculty/staff directory
Route::get('/faculty-directory', function () { 
    return view('faculty-directory'); // Points to your faculty-directory.blade.php file
    })->name('faculty.directory'); 