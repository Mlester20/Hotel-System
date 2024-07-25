<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffDepartment;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class,'home']);
Route::get('/service/{id}', [HomeController::class,'service_detail']);
Route::get('page/about_us', [PageController::class,'about_us']);
Route::get('page/contact_us', [PageController::class,'contact_us']);

//admin login
Route::get('admin/login', [AdminController::class,'login']);
Route::post('admin/login', [AdminController::class,'check_login']);
Route::get('admin/logout', [AdminController::class,'logout']);

//admin dashboard
Route::get('admin', [AdminController::class,'dashboard']);

Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class,'destroy']);
Route::resource('admin/roomtype', RoomtypeController::class);

//room type folder route
Route::get('admin/rooms/{id}/delete', [RoomController::class,'destroy']);
Route::resource('admin/rooms', RoomController::class);

//customer route
Route::get('admin/customer/{id}/delete', [CustomerController::class,'destroy']);
Route::resource('admin/customer', CustomerController::class);

//delete image
Route::get('admin/roomtypeimage/delete/{id}', [RoomtypeController::class,'destroy_image']);

//department route
Route::get('admin/department/{id}/delete', [StaffDepartment::class,'destroy']);
Route::resource('admin/department', StaffDepartment::class);

//staff payment
Route::get('admin/staff/payments/{id}',[StaffController::class,'all_payments']);
Route::get('admin/staff/payment/{id}/add',[StaffController::class,'add_payment']);
Route::post('admin/staff/payment/{id}',[StaffController::class,'save_payment']);
Route::get('admin/staff/payment/{id}/{staff_id}/delete', [StaffController::class,'delete_payment']);

//staff crud
Route::get('admin/staff/{id}/delete', [StaffController::class,'destroy']);
Route::resource('admin/staff', StaffController::class);

//bookings
Route::get('admin/booking/{id}/delete', [BookingController::class,'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}', [BookingController::class, 'available_rooms']);
Route::resource('admin/booking', BookingController::class);

Route::get('login', [CustomerController::class,'login']);
Route::post('customer/login', [CustomerController::class,'customer_login']);
Route::get('register', [CustomerController::class,'register']);
Route::get('logout', [CustomerController::class,'logout']);

Route::get('booking', [BookingController::class,'front_booking']);

//service 
Route::get('admin/service/{id}/delete', [ServiceController::class,'destroy']);
Route::resource('admin/service', ServiceController::class);

//testimonials
Route::get('customer/add_testimonial', [HomeController::class,'add_testimonial']);
Route::post('customer/save_testimonial', [HomeController::class,'save_testimonial']);
Route::get('admin/testimonial/{id}/delete', [AdminController::class,'destroy_testimonial']);
Route::get('admin/testimonial', [AdminController::class,'testimonials']);
Route::post('save_contact_ud', [PageController::class,'save_contact_us']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/generate-report', [DashboardController::class, 'generateReport'])->name('generate.report');