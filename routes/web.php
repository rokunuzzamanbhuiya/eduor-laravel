<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\CourseController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\ContactController;

use App\Http\Controllers\ErrorController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/courses', [CourseController::class, 'course'])->name('courses');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/blog_details', [BlogController::class, 'blog_details'])->name('blog_details');
Route::get('/course_details', [CourseController::class, 'course_details'])->name('course_details');
Route::get('/team_details', [TeamController::class, 'team_details'])->name('team_details');
