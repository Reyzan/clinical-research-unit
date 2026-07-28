<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\AppointmentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\ResearcherController;
use App\Http\Controllers\Frontend\ResearchGroupController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\TeamController;
use Illuminate\Support\Facades\Route;

// Frontend Routes (use Bootstrap bundle)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('name-card/{slug}', [HomeController::class, 'showNameCard'])->name('name-card');
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Researchers (Our Teams)
Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/research-groups/{group}', [ResearchGroupController::class, 'show'])->name('research-groups.show');
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');

// Researcher profile pages (linked from /teams mosaic)
Route::get('/researchers/{researcher}', [ResearcherController::class, 'show'])->name('researchers.show');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// News
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Appointment
Route::get('/appointment', [AppointmentController::class, 'create'])->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
