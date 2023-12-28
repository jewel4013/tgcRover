<?php

use App\Http\Controllers\AdminControl;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userControl;
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
    Route::patch('/profile/bios', [ProfileController::class, 'boisEdit'])->name('profile.boisEdit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/dashboard', [AdminControl::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/members', [userControl::class, 'members'])->name('admin.members');
    Route::get('/admin/members/panding', [userControl::class, 'pendingMembers'])->name('admin.member.pendingMembers');
    Route::post('/admin/members/panding/approved', [userControl::class, 'pendingMemberApproved'])->name('admin.member.pendingMemberApproved');
    Route::post('/admin/members/panding/approved/mail', [userControl::class, 'pendingMemberApprovedMail'])->name('admin.member.pendingMemberApprovedMail');
    Route::post('/admin/members/panding/delete', [userControl::class, 'pendingMemberDelete'])->name('admin.member.pendingMemberDelete');
    Route::post('/admin/members/panding/delete/mail', [userControl::class, 'pendingMemberDeleteMail'])->name('admin.member.pendingMemberDeleteMail');
    Route::get('/admin/members/suspended', [userControl::class, 'susMember'])->name('admin.member.susMember');

});

Route::get('/gallery', function(){
    return view('gallery');
    // dd(Request::is('gallery'));
});
Route::get('/admission', function(){
    return view('admission');
    // dd(Request::is('gallery'));
});
Route::get('/faq', function(){
    return view('faq');
    // dd(Request::is('gallery'));
});





require __DIR__.'/auth.php';
