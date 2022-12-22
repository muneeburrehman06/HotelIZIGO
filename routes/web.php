<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/reset-password', function () {
    return view('reset-password');
});

Route::get('/change-password', function () {
    return view('change-password');
});

Route::get('/booking-requests', function () {
    return view('booking-requests');
});

Route::get('/booking-details', function () {
    return view('booking-details');
});

Route::get('/all-booking', function () {
    return view('all-booking');
});

Route::get('/add-booking', function () {
    return view('add-booking');
});

Route::get('/edit-booking', function () {
    return view('edit-booking');
});

Route::get('/booking-history', function () {
    return view('booking-history');
});

Route::get('/all-customers', function () {
    return view('all-customers');
});

Route::get('/add-customer', function () {
    return view('add-customer');
});

Route::get('/edit-customer', function () {
    return view('edit-customer');
});

Route::get('/all-services', function () {
    return view('all-services');
});

Route::get('/add-service', function () {
    return view('add-service');
});

Route::get('/edit-service', function () {
    return view('edit-service');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/payments', function () {
    return view('payments');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/notifications', function () {
    return view('notifications');
});