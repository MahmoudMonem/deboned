<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
Auth::routes();
// Homepage
Route::get('/', [PagesController::class, 'index'])->name('home');

// Main Pages
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/menu', [PagesController::class, 'menu'])->name('menu');
Route::get('/restaurants', [PagesController::class, 'restaurants'])->name('restaurants');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

// Reservations
Route::get('/reservations', [PagesController::class, 'reservations'])->name('reservations');
Route::post('/reservations', [PagesController::class, 'storeReservation'])->name('reservations.store');

// Contact Form
Route::post('/contact', [PagesController::class, 'storeContact'])->name('contact.store');

// Newsletter
Route::post('/newsletter', [PagesController::class, 'newsletter'])->name('newsletter');

// Services
Route::get('/catering', [PagesController::class, 'catering'])->name('catering');
Route::get('/private-dining', [PagesController::class, 'privateDining'])->name('private-dining');
Route::get('/gift-cards', [PagesController::class, 'giftCards'])->name('gift-cards');
Route::get('/loyalty', [PagesController::class, 'loyalty'])->name('loyalty');

// Company
Route::get('/careers', [PagesController::class, 'careers'])->name('careers');
Route::get('/press', [PagesController::class, 'press'])->name('press');

// Legal
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PagesController::class, 'terms'])->name('terms');
Route::get('/sitemap', [PagesController::class, 'sitemap'])->name('sitemap');

Route::get('/success-message', [PagesController::class, 'success-message'])->name('successMessage');



// Add these routes for the forms
Route::post('/franchise', [PagesController::class, 'storeFranchise'])->name('franchise.submit');
Route::post('/contact', [PagesController::class, 'storeContact'])->name('contact.submit');

Route::post('/contact', [PagesController::class, 'storeContact'])->name('contact.submit');
Auth::routes();


