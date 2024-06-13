<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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
    return view('pages.home');
})->name('home');

Route::get('/kontakt', function() {
    return view('pages.contact');
})->name('contact');

Route::get('/mma', function() {
    return view('pages.mma');
})->name('mma');

Route::get('/brazilian-jiu-jitsu', function() {
    return view('pages.jitsu');
})->name('jitsu');

Route::get('/muay-thai', function() {
    return view('pages.muay-thai');
})->name('muay-thai');

Route::get('/grappling', function() {
    return view('pages.grappling');
})->name('grappling');

Route::get('/bjj-for-kids', function() {
    return view('pages.kids-jitsu');
})->name('kids-jitsu');

Route::get('/muay-thai-kids', function() {
    return view('pages.kids-muay-thai');
})->name('kids-muay-thai');

Route::get('/beispiel-seite', function() {
    return view('pages.about');
})->name('about');

Route::get('/oeffnungszeiten', function() {
    return view('pages.time-table');
})->name('time-table');

Route::post('send-mail', [EmailController::class, 'sendEmail'])->name('send-mail');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
