<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\frontend\FrontBusinessController;
use App\Http\Controllers\frontend\FrontContactController;
use App\Http\Controllers\frontend\FrontNewsController;
use App\Http\Controllers\frontend\FrontTeamController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
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

    //for business page

    // Route::view('/business', 'frontend.pages.business.index')->name('frontend.business');
    Route::get('/business', [FrontBusinessController::class,'index'])->name('frontend.business');
    Route::get('/business/{id}', [FrontBusinessController::class,'show'])->name('frontend.business_show');


    Route::view('/about', 'frontend.pages.about.index')->name('frontend.about');

    //for team
    // Route::view('/team', 'frontend.pages.team.index')->name('frontend.team');
    Route::get('/team', [FrontTeamController::class,'index'])->name('frontend.team');
    Route::get('/team/{id}', [FrontTeamController::class,'show'])->name('frontend.team_show');

    //for contact
    // Route::view('/contact', 'frontend.pages.contact.index')->name('frontend.contact');
    Route::get('/contact', [FrontContactController::class,'index'])->name('frontend.contact');
    Route::post('/contact', [FrontContactController::class,'store'])->name('frontend.contact_store');

    //for news
    // Route::view('/newsroom', 'frontend.pages.newsroom.index')->name('frontend.newsroom');
    Route::get('/newsroom', [FrontNewsController::class,'index'])->name('frontend.newsroom');
    Route::get('/newsroom{id}', [FrontNewsController::class,'show'])->name('frontend.newsroom_show');





    //for login
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'authenticate'])->name('user.login');



    Route::view('/community', 'frontend.pages.community.index')->name('frontend.community');
    Route::view('/careers', 'frontend.pages.careers.index')->name('frontend.careers');


//for backend

Route::middleware(['auth'])->group(function () {


    Route::get('/logout',[LoginController::class,'logout'])->name('user.logout');

    Route::prefix('admin')->group(function () {



        Route::view('/dashboard', 'backend.pages.dashboard.index')->name('dashboard');
        Route::resource('/business', BusinessController::class);
        Route::resource('/team', TeamController::class);
        Route::resource('/community', CommunityController::class);
        Route::resource('/contact', ContactController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/slider', SliderController::class);



        //not done
        Route::resource('/aboutus', AboutusController::class);
        Route::get('/aboutus/{id}', [AboutusController::class,'aboutus'])->name('about_us');

    });


});
