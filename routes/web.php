<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardSearchController;
use App\Http\Controllers\CardContentsController;

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
    return view('/card_search/search');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/card_search', [CardSearchController::class, 'card_search'])->name('card_search');

Route::post('card_contents', [CardContentsController::class, 'store'])->name('card_contents.store');
Route::get('card_contents', [CardContentsController::class, 'index']);

Route::get('card_contents/create', [CardContentsController::class, 'create'])->middleware(['auth','admin'])->name('create');

Route::get('card_contents/show/{card_contents_id}', [CardContentsController::class, 'show'])->name('card_contents.show');

Route::get('card_contens/{card_content}/edit', [CardContentsController::class, 'edit'])->name('card_contents.edit');

Route::patch('card_contents/{card_content}', [CardContentsController::class, 'update'])->name('card_contents.update');

require __DIR__.'/auth.php';
