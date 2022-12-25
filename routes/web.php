<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/contact', function () {
        return view('contact');
     });

Route::get('/',[HomeController::class, 'index']);
Route::get('/newspost/{id}',[HomeController::class, 'aboutnews']);
Route::get('/allnews',[HomeController::class, 'allnews']);

Route::get('/test',[HomeController::class, 'test']);


Route::get('/aboutUs',[HomeController::class, 'aboutUs']);

Route::get('/milkCeh',[HomeController::class, 'newsmilk']);
Route::get('/meatCeh',[HomeController::class, 'newsmeat']);
Route::get('/fruitCeh',[HomeController::class, 'newsfruit']);
Route::get('/bredCeh',[HomeController::class, 'newsbred']);


Route::get('/sensLab',[HomeController::class, 'newsland']);
Route::get('/mikroLab',[HomeController::class, 'newsland1']);
Route::get('/himLab',[HomeController::class, 'newsland2']);

Route::get('/technicalservices',[HomeController::class, 'technicalservices']);


Route::get('/shortCourse',[HomeController::class, 'shortCourse']);

Route::get('/upperSkillCourse',[HomeController::class, 'upperSkillCourse']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group (function () {
    Route::get('/',[App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('/news', NewsController::class);
    Route::resource('/category', CategoryController::class);
});

