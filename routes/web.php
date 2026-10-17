<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\CoursesController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\EventsController;
use App\Http\Controllers\frontend\SignupController;
use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\PrivacyPolicyController;
use App\Http\Controllers\frontend\TermsConditionController;


use App\Http\Controllers\frontend\PagesController;

use App\Http\Controllers\ErrorController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home_2', [HomeController::class, 'index_2'])->name('home-2');
Route::get('/home_3', [HomeController::class, 'index_3'])->name('home-3');

Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/courses', [CoursesController::class, 'courses'])->name('courses');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/team', [TeamController::class, 'team'])->name('team');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/events', [EventsController::class, 'events'])->name('events');
Route::get('/sign_up', [SignupController::class, 'signup'])->name('sign_up');
Route::get('/sign_in', [SignupController::class, 'signin'])->name('sign_in');
Route::get('/faq', [FaqController::class, 'faq'])->name('faq');
Route::get('/privacy_policy', [PrivacyPolicyController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/terms_condition', [TermsConditionController::class, 'terms_condition'])->name('terms_condition');

Route::get('/pages', [PagesController::class, 'pages'])->name('pages');

Route::get('/blog_details', [BlogController::class, 'blog_details'])->name('blog_details');
Route::get('/course_details', [CoursesController::class, 'course_details'])->name('course_details');
Route::get('/team_details', [TeamController::class, 'team_details'])->name('team_details');
Route::get('/event_details', [EventsController::class, 'event_details'])->name('event_details');


Route::get('/error', [ErrorController::class, 'error'])->name('error');
