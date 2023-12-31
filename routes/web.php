<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/home', function () {
//     return view('app');
// });

Route::get('/products/menu', function () {
    return view('menu');
});

Route::get('/products/edit', function () {
    return view('edit');
});


// * Location
Route::get('/location-facilities', [LocationController::class, 'showLocation']);
Route::get('/location-facilities/add-table', [LocationController::class, 'addTable'])->name('addTabel');
Route::post('/location-facilities/add-table', [LocationController::class, 'submitAddTable']);
Route::get('/location-facilities/edit-table/{id}', [LocationController::class, 'editTable']);
Route::put('/location-facilities/edit-table/{id}', [LocationController::class, 'submitEditTable'])->name('table.update');
Route::get('/location-facilities/delete-table/{id}', [LocationController::class, 'deleteTable'])->name('table.delete');
