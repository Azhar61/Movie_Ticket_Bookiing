<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MoviePageController;
use App\Http\Controllers\SeatBookingController;
use App\Http\Controllers\ShowTimeController;
use App\Http\Controllers\ShowtimeDetailsController;
use App\Http\Controllers\BookingController;

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
Route::view('movie_page','movie_page');
Route::get('updateordelete',[mycontroller::class,'updateordelete']);
Route::get('updatedata',[mycontroller::class,'update']);
Route::view('add_showtime', 'add_showtime');
Route::get('moviepage',[MoviePageController::class,'sendmoviepage']);

Route::view('comming_soon','comming_soon');
//Route::view('contact','contact');
Route::view('about_us','about_us');
Route::get('comming_soon',[mycontroller::class, 'show_movies']);
Route::get('now_showing',[mycontroller::class, 's_movies']);

Route::view('test','test');

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

//ShowTime Routes
Route::post('insertShowData', [ShowTimeController::class, 'insertShow']);
Route::get('add_showtime', [ShowTimeController::class, 'readdata']);
//Route::get('add_showtime',[ShowTimeController::class, 'MoviesList']);
//Route::get('movie_page',[MoviePageController::class,'showtimedataa']);
//Routes For Seat Booking
Route::view('seat_booking','seat_booking');
//Route::get('seat_booking', [FoodController::class, 'foodprice']);
Route::get('seatPage',[SeatBookingController::class, 'sendSeatPage1']);
Route::get('seatPageAfter',[SeatBookingController::class, 'sendSeatPage2']);
Route::get('seatPageNight',[SeatBookingController::class, 'sendSeatPage3']);
Route::post('SeatBooking',[BookingController::class, 'bookSeat']);

//Booking Sale Routes

Route::get('booking_sales',[BookingController::class, 'readdata']);
