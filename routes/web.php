<?php

use App\Http\Controllers\EmploySalarryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SinglePostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// main Router
Route::get('/' , [HomeController::class, 'dashboard']);
Route::get('/calendar', [HomeController::class, 'calendar']);
Route::get('/chat', [HomeController::class, 'chat']);
// end main Router

// single mobile app
Route::get('/singlepost', [SinglePostController::class, 'sp1'] );
Route::get('/singlepost/blog', [SinglePostController::class, 'blog1']);
// single post hompage
Route::get('/spostHome', [SinglePostController::class, 'spost2']);
Route::get('/spostHome/blogHome', [SinglePostController::class, 'blog2']);
// single post database
Route::get('/spostdatabase', [SinglePostController::class, 'spost3']);
Route::get('/spostdatabase/blogDatabase', [SinglePostController::class, 'blog3']);
// single post android
Route::get('/spostAndroid', [SinglePostController::class, 'spost4']);
Route::get('/spostAndroid/blogAndroid', [SinglePostController::class, 'blog4']);
// single post design
Route::get('/spostDesign', [SinglePostController::class, 'spost5']);
Route::get('/spostDesign/blogDesign', [SinglePostController::class, 'blog5']);
// end single post router

// Salary data Router
Route::get('/EmployeSalarry', [EmploySalarryController::class, 'salarry']);
Route::get('/EmployeSalarry/Form', [EmploySalarryController::class, 'form']);


