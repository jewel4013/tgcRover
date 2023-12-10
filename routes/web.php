<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/bios', [ProfileController::class, 'bios'])->name('profile.bios');
    Route::post('/profile/bios', [ProfileController::class, 'boisCreate'])->name('profile.boisCreate');
    Route::patch('/profile/bios', [ProfileController::class, 'boisEdit'])->name('profile.boisEdit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/gallery', function(){
    return view('gallery');
    // dd(Request::is('gallery'));
});
Route::get('/admission', function(){
    return view('admission');
    // dd(Request::is('gallery'));
});





require __DIR__.'/auth.php';
