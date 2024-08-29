<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HakRoleController;
use App\Http\Controllers\ProfileController;

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

Route::resource('roles', HakRoleController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin', function () {
    return '<h1>Hello Admin</h1>';
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('penulis', function () {
    return '<h1>Hello Penulis</h1>';
})->middleware(['auth', 'verified', 'role:penulis|admin']);

// Route::get('tulisan', function () {
//     return '<h1>Hello Tulisan</h1>';
// })->middleware(['auth', 'verified', 'permission:lihat-tulisan']);

Route::get('tulisan', function () {
    // return '<h1>Hello Tulisan</h1>';
    return view('tulisan');
})->middleware(['auth', 'verified', 'role_or_permission:lihat-tulisan|admin'])->name('tulisan');

require __DIR__ . '/auth.php';
