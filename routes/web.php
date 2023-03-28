<?php

use App\Http\Controllers\SearchController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('index');
});
Route::get('/dashboard', function() {
    return view('admin.dashboard');
});
Route::get('/activities', function() {
    return view('activities');
});
Route::get('/student', function() {
    return view('student');
});
Route::get('/user', function() {
    $users = User::all();
    return view('admin.user', compact('users'));
});
Route::get('/post', function() {
    $users = User::all();
    return view('admin.default', compact('users'));
});