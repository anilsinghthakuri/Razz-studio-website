<?php

use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Route;

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

//for frontend

Route::view('/', 'frontend.pages.home.index')->name('frontend.home');
Route::view('/business', 'frontend.pages.business.index')->name('frontend.business');
Route::view('/about', 'frontend.pages.about.index')->name('frontend.about');
Route::view('/team', 'frontend.pages.team.index')->name('frontend.team');
Route::view('/community', 'frontend.pages.community.index')->name('frontend.community');
Route::view('/newsroom', 'frontend.pages.newsroom.index')->name('frontend.newsroom');
Route::view('/careers', 'frontend.pages.careers.index')->name('frontend.careers');
Route::view('/contact', 'frontend.pages.contact.index')->name('frontend.contact');


//for backend

Route::prefix('admin')->group(function () {

    Route::view('/dashboard', 'backend.pages.dashboard.index')->name('dashboard');
    Route::resource('/business', BusinessController::class);

});
