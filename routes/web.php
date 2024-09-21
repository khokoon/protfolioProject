<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('pages.index');
// });
    
//home page
Route::get('/',[PagesController::class,'index'])->name('home');

// Admin page
Route::get('/admin/dashboard',[PagesController::class,'dashboard'])->name('admin.dashboard');

Route::get('/admin/main',[PagesController::class,'main'])->name('admin.main');

Route::get('/admin/services',[PagesController::class,'services'])->name('admin.services');

Route::get('/admin/portfolio',[PagesController::class,'portfolio'])->name('admin.portfolio');

Route::get('/admin/about',[PagesController::class,'about'])->name('admin.about');

Route::get('/admin/contact',[PagesController::class,'contact'])->name('admin.contact');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
