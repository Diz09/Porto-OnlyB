<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WorkController;

// Route::get('/', function () {    return view('index');  });

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('welcome', [WelcomeController::class, 'show'])->name('welcome');
Route::get('about', [AboutController::class, 'show'])->name('about');
Route::get('service', [ServiceController::class, 'show'])->name('service');
Route::get('resume', [ResumeController::class, 'show'])->name('resume');
Route::get('work', [WorkController::class, 'show'])->name('work');
Route::get('testimonial', [TestimonialController::class, 'show'])->name('testimonial');
Route::get('contact', [ContactController::class, 'show'])->name('contact');
