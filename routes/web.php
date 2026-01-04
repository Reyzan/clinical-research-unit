<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\DoctorController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\AppointmentController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\PagesController;

// Frontend Routes (use Bootstrap bundle)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Doctors
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
Route::get('/doctors/{doctor}', [DoctorController::class, 'show'])->name('doctors.show');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Appointment
Route::get('/appointment', [AppointmentController::class, 'create'])->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Template Pages Routes (All Ophtical HTML template pages)
Route::prefix('templates')->name('templates.')->group(function () {
    // Homepage variations
    Route::get('/', [PagesController::class, 'index'])->name('index');
    Route::get('/homepage-2', [PagesController::class, 'homepage2'])->name('homepage-2');
    Route::get('/homepage-3', [PagesController::class, 'homepage3'])->name('homepage-3');

    // About pages
    Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('about-us');
    Route::get('/our-history', [PagesController::class, 'ourHistory'])->name('our-history');

    // Services
    Route::get('/services', [PagesController::class, 'services'])->name('services');
    Route::get('/service-details', [PagesController::class, 'serviceDetails'])->name('service-details');

    // Doctors
    Route::get('/our-doctors', [PagesController::class, 'ourDoctors'])->name('our-doctors');
    Route::get('/doctor-detail', [PagesController::class, 'doctorDetail'])->name('doctor-detail');

    // Other pages
    Route::get('/appointment', [PagesController::class, 'appointment'])->name('appointment');
    Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact-us');
    Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
    Route::get('/element', [PagesController::class, 'element'])->name('element');

    // Blog pages
    Route::get('/blog-classic', [PagesController::class, 'blogClassic'])->name('blog-classic');
    Route::get('/blog-grid-col-3', [PagesController::class, 'blogGridCol3'])->name('blog-grid-col-3');
    Route::get('/blog-grid-col-4', [PagesController::class, 'blogGridCol4'])->name('blog-grid-col-4');
    Route::get('/blog-masonry-wide', [PagesController::class, 'blogMasonryWide'])->name('blog-masonry-wide');
    Route::get('/blog-m-grid-col-2', [PagesController::class, 'blogMGridCol2'])->name('blog-m-grid-col-2');
    Route::get('/blog-m-grid-col-3', [PagesController::class, 'blogMGridCol3'])->name('blog-m-grid-col-3');
    Route::get('/blog-m-grid-col-4', [PagesController::class, 'blogMGridCol4'])->name('blog-m-grid-col-4');
    Route::get('/blog-single-detail', [PagesController::class, 'blogSingleDetail'])->name('blog-single-detail');
    Route::get('/blog-sortable-grid-view', [PagesController::class, 'blogSortableGridView'])->name('blog-sortable-grid-view');

    // Portfolio pages
    Route::get('/portfolio-detail-style-01', [PagesController::class, 'portfolioDetailStyle01'])->name('portfolio-detail-style-01');
    Route::get('/portfolio-detail-style-02', [PagesController::class, 'portfolioDetailStyle02'])->name('portfolio-detail-style-02');
    Route::get('/portfolio-grid-col-2', [PagesController::class, 'portfolioGridCol2'])->name('portfolio-grid-col-2');
    Route::get('/portfolio-grid-col-3', [PagesController::class, 'portfolioGridCol3'])->name('portfolio-grid-col-3');
    Route::get('/portfolio-grid-col-4', [PagesController::class, 'portfolioGridCol4'])->name('portfolio-grid-col-4');
    Route::get('/portfolio-grid-no-gap', [PagesController::class, 'portfolioGridNoGap'])->name('portfolio-grid-no-gap');
    Route::get('/portfolio-m-grid-col-2', [PagesController::class, 'portfolioMGridCol2'])->name('portfolio-m-grid-col-2');
    Route::get('/portfolio-m-grid-col-3', [PagesController::class, 'portfolioMGridCol3'])->name('portfolio-m-grid-col-3');
    Route::get('/portfolio-m-grid-col-4', [PagesController::class, 'portfolioMGridCol4'])->name('portfolio-m-grid-col-4');
    Route::get('/portfolio-m-grid-wide', [PagesController::class, 'portfolioMGridWide'])->name('portfolio-m-grid-wide');
    Route::get('/portfolio-sortable-grid-col-2', [PagesController::class, 'portfolioSortableGridCol2'])->name('portfolio-sortable-grid-col-2');
    Route::get('/portfolio-sortable-grid-col-3', [PagesController::class, 'portfolioSortableGridCol3'])->name('portfolio-sortable-grid-col-3');
    Route::get('/portfolio-sortable-grid-col-4', [PagesController::class, 'portfolioSortableGridCol4'])->name('portfolio-sortable-grid-col-4');
});
