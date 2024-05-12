<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProfileController;

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

Route::get('coursehome',function(){
     return view('coursehome');
});
Route::get('about',function(){
     return view('about');
});
Route::get('fields',function(){
     return view('Fields');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');






Route::post('/change-password', [App\Http\Controllers\ProfileController::class, 'updatePassword'])->name('update-password');



Route::controller(ProfileController::class)->group(function() {  
    Route::get('adminprofile','profile');
    Route::get('doctorprofile','doctorprofile');
    Route::get('studentprofile','studentprofile');
    Route::get('accountantprofile','studentprofile');
    Route::post('updateprofile/{id}','updateprofile')->name('updateprofile');
});

