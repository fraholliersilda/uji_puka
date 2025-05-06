<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminAnnouncementController;
use App\Http\Controllers\Admin\AdminContactController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Faqet publike
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Shërbimet
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

// Njoftimet
Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');
Route::get('/announcements/{id}', [AnnouncementController::class, 'show'])->name('announcements.show');

// Kontakti
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Autentikimi
Auth::routes(['register' => false]);

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Admin Services
    Route::get('/services', [AdminServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [AdminServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [AdminServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}/edit', [AdminServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [AdminServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [AdminServiceController::class, 'destroy'])->name('services.destroy');

    // Admin Announcements
    // Admin Announcements
    Route::get('/announcements', [AdminAnnouncementController::class, 'index'])->name('announcements.index');
    Route::get('/announcements/create', [AdminAnnouncementController::class, 'create'])->name('announcements.create');
    Route::post('/announcements', [AdminAnnouncementController::class, 'store'])->name('announcements.store');
    Route::get('/announcements/{id}', [AdminAnnouncementController::class, 'show'])->name('announcements.show'); // Add this missing route
    Route::get('/announcements/{id}/edit', [AdminAnnouncementController::class, 'edit'])->name('announcements.edit');
    Route::put('/announcements/{id}', [AdminAnnouncementController::class, 'update'])->name('announcements.update');
    Route::delete('/announcements/{id}', [AdminAnnouncementController::class, 'destroy'])->name('announcements.destroy');

    // Admin Contacts
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}', [AdminContactController::class, 'show'])->name('contacts.show');
    Route::put('/contacts/{id}/mark-as-read', [AdminContactController::class, 'markAsRead'])->name('contacts.mark-as-read');
    Route::delete('/contacts/{id}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
});
