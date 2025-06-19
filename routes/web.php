<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/newsletter', [NewsletterController::class, 'submit'])->name('newsletter.submit');

Route::view('/mentions-legales', 'cgu')->name('cgu');

Route::get('/services', function () {
})->name('services');

Route::get('/expertises', function () {
})->name('expertises');

Route::get('/realisations', function () {
})->name('realisations');

Route::get('/blog', function () {

})->name('blog');
