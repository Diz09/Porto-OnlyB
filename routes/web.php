<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ProjectController;

// Route::get('/', function () {    return view('index');  });

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('welcome', [WelcomeController::class, 'show'])->name('welcome');
Route::get('about', [AboutController::class, 'show'])->name('about');
Route::get('service', [ServiceController::class, 'show'])->name('service');
Route::get('resume', [ResumeController::class, 'show'])->name('resume');
Route::get('project', [ProjectController::class, 'show'])->name('project');
Route::get('achievement', [AchievementController::class, 'show'])->name('achievement');
Route::get('contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');