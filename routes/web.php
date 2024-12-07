<?php

use App\Http\Controllers\admin\EndowController;
use App\Http\Controllers\admin\NewEventController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UploadController;
use App\Http\Controllers\frontend\TourController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthRegisteredUserController;
use App\Http\Controllers\MainAdminController;
use Illuminate\Support\Facades\Route;

// Be

//login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthRegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [AuthRegisteredUserController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        // Route::get('/', function () {
        //     return view('backend.home');
        // });
        Route::get('/', [MainAdminController::class, 'index']);

        Route::post('/product_add_', [ProductController::class, 'insert_product']);
        Route::get('/product_add', [ProductController::class, 'add_product']);
        Route::get('/product_list', [ProductController::class, 'list_product']);
        Route::get('/product_delete', [ProductController::class, 'delete_product']);
        Route::get('/product_edit/{id}', [ProductController::class, 'edit_product']);
        Route::post('/product_edit/{id}', [ProductController::class, 'update_product']);

        // Longbi route endow
        Route::post('/endow_add_', [EndowController::class, 'insert_endow']);
        Route::get('/endow_add', [EndowController::class, 'add_endow']);
        Route::get('/endow_list', [EndowController::class, 'list_endow']);
        Route::get('/endow_delete', [EndowController::class, 'delete_endow']);
        Route::get('/endow_edit/{id}', [EndowController::class, 'edit_endow']);
        Route::post('/endow_edit/{id}', [EndowController::class, 'update_endow']);

        // New and Event
        Route::post('/new_event_add_', [NewEventController::class, 'insert_new_event']);
        Route::get('/new_event_add', [NewEventController::class, 'add_new_event']);
        Route::get('/new_event_list', [NewEventController::class, 'list_new_event']);
        Route::get('/new_event_delete', [NewEventController::class, 'delete_new_event']);
        Route::get('/new_event_edit/{id}', [NewEventController::class, 'edit_new_event']);
        Route::post('/new_event_edit/{id}', [NewEventController::class, 'update_new_event']);


        Route::get('/order_list', [TourController::class, 'order_list']);
    });
});

// upload img
Route::post('/upload', [UploadController::class, 'upLoadImg']);
Route::post('/uploads', [UploadController::class, 'upLoadImgs']);


// Fe
Route::get('/', [TourController::class, 'index']);
Route::get('/contact', [TourController::class, 'contact']);
Route::get('/booking/{id}', [TourController::class, 'booking']);
Route::post('/booking_add', [TourController::class, 'insert_booking']);
Route::get('/booking_delete', [TourController::class, 'delete_booking']);

Route::get('/tour_detail/{id}', [TourController::class, 'tour_detail']);
Route::get('/endow_detail/{id}', [TourController::class, 'endow_detail']);
Route::get('/new_event_detail/{id}', [TourController::class, 'new_event_detail']);


Route::get('/confirm_booking', function () {
    return view('frontend.mail_confirm');
});

Route::get('/confirm_booking_succcess', function () {
    return view('frontend.mail_success');
});

Route::get('/confirm/{token}', [TourController::class, 'confirmBooking'])->name('confirm.booking');

Route::get('/search', [TourController::class, 'search'])->name('searchTour');

