<?php

use App\Http\Controllers\EmailController;
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
    return view('pages.jitsu');
})->name('muay-thai');

Route::get('/grappling', function() {
    return view('pages.grappling');
})->name('grappling');

Route::get('/bjj-for-kids', function() {
    return view('pages.kids-jitsu');
})->name('kids-jitsu');

Route::get('/beispiel-seite', function() {
    return view('pages.about');
})->name('about');

Route::get('/oeffnungszeiten', function() {
    return view('pages.time-table');
})->name('time');

Route::post('send-mail', [EmailController::class, 'sendEmail'])->name('send-mail');
