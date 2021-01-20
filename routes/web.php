<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('patients',  [App\Http\Controllers\PatientController::class, 'index'])->middleware(['auth'])->name('patients.index');
Route::get('patients/create',  [App\Http\Controllers\PatientController::class, 'create'])->middleware(['auth'])->name('patients.create');
Route::get('patients/show/{id?}',  [App\Http\Controllers\PatientController::class, 'show'])->middleware(['auth'])->name('patients.show');
Route::get('patients/print/{id?}',  [App\Http\Controllers\PatientController::class, 'print'])->middleware(['auth'])->name('patients.print');
Route::post('patients/store',  [App\Http\Controllers\PatientController::class, 'store'])->middleware(['auth'])->name('patients.store');
Route::post('patients/update/{id?}',  [App\Http\Controllers\PatientController::class, 'update'])->middleware(['auth'])->name('patients.update');
Route::post('patients/destroy/{id?}',  [App\Http\Controllers\PatientController::class, 'destroy'])->middleware(['auth'])->name('patients.destroy');
Route::post('patients/fetch',  [App\Http\Controllers\PatientFetchController::class, 'fetch'])->middleware(['auth'])->name('patients.fetch');
Route::post('patients/fetch-item/{id?}',  [App\Http\Controllers\PatientFetchController::class, 'fetchView'])->middleware(['auth'])->name('patients.fetch-item');


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
