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
Route::get('/detail-activities', function() {
    return view('detail-activities');
});
Route::get('/activities', function() {
    return view('activities');
});
Route::get('/student', function() {
    return view('new_student');
});
Route::get('/teacher', function() {
    return view('teacher');
});
Route::get('/quotes', function() {
    return view('quotes');
});
Route::get('/detail', function() {
    return view('detail-student');
});
Route::get('/store', function() {
    return view('404');
});
Route::get('/user', function() {
    $users = User::all();
    return view('admin.user', compact('users'));
});
Route::get('/post', function() {
    $users = User::all();
    return view('admin.default', compact('users'));
});