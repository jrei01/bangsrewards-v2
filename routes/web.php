<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Activate;
use App\Http\Livewire\Activities;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});



Route::middleware('guest')->group(function() {
    Route::get('/activate', Activate::class)->name('activate');
    Route::get('/activities', Activities::class)->name('activities');
});
