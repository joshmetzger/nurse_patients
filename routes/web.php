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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/patients', [App\Http\Controllers\PatientController::class, 'index'])->name('patients.index');
Route::post('patients', [App\Http\Controllers\PatientController::class, 'store'])->name('patient.store');

Route::get('/patients/{patient}/edit', [App\Http\Controllers\PatientController::class, 'edit'])->name('patient.edit');
// Route::patch('/patients/{patient}/update', [App\Http\Controllers\PatientController::class, 'update'])->name('patient.update');
