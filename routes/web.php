<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ContactUsController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('home');
});

//Route::view('/','create');
//Routes For over All Website
Route::post('insertData', [mycontroller::class, 'insert']);
Route::get('create', [mycontroller::class, 'readdata']);
Route::view('update','update');
Route::get('updateordelete',[mycontroller::class,'updateordelete']);
Route::get('updatedata',[mycontroller::class,'update']);



Route::view('comming_soon','comming_soon');
//Route::view('contact','contact');
Route::view('about_us','about_us');
Route::get('comming_soon',[mycontroller::class, 'show_movies']);
Route::get('now_showing',[mycontroller::class, 'now_show_movies']);
//Route::view('test','test');
Route::get('test',[mycontroller::class, 'MoviesList']);
// Routes For Login
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
//Routes For Fast Food
Route::view('fastFood','fastFood');
Route::post('insertPriceData', [FoodController::class, 'insertPrice']);
Route::get('fastFood', [FoodController::class, 'readdata']);
//Routes For Contact-us Form

Route::get('contact-us',[ContactUsController::class,'create']);
Route::post('contact-us', [ContactUsController::class,'store']);

//Route::get('contact-us', 'ContactUsController@create');


