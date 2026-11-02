<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    })->name('home'); 

// Route Pathway to the faculty/staff directory page
Route::get('/faculty-directory', function () { 
    return view('faculty-directory'); // Points user to the faculty-directory.blade.php file
    })->name('faculty.directory'); 

// Route Pathway to the courses page
Route::get('/courses', function () { 
    return view('courses'); // Points user to the courses.blade.php file
    })->name('courses'); 

// Route Pathway to the admissions page
Route::get('/admissions', function () { 
    return view('admissions'); // Points user to the admissions.blade.php file
    })->name('admissions'); 

// Route Pathway to the social media page
Route::get('/social-media', function () { 
    return view('social-media'); // Points user to the social.media.blade.php file
    })->name('social.media'); 