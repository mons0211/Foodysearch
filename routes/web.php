<?php
// Fontend routes

Route::get('/', function () {
    return view('User.user');
});

Route::get('/userhome', function () {
    return view('User.userHome');
});

Route::get('/userlogin', function () {
    return view('UserAuthentication.userLogin');
});

Route::get('/userregistration', function () {
    return view('UserAuthentication.userRegistration');
});

Route::get('/result', function () {
    return view('Search.result');
});

Route::get('/restaurants', function () {
    return view('Restaurants.restaurants');
});

/****** End ******/


// Admin routes
Route::get('/admin', function () {
    return view('Admin.admin_home');
});

Route::get('/profile', function () {
    return view('Admin.admin_profile');
});

Route::get('/settings', function () {
    return view('Admin.admin_setting');
});

Route::get('/adminlogin', function () {
    return view('Admin.Authentication.login');
});

Route::get('/register', function () {
    return view('Admin.Authentication.registration');
});

Route::get('/otp', function () {
    return view('Admin.Authentication.otp');
});

Route::get('/password', function () {
    return view('Admin.Authentication.password');
});

/***** End *****/