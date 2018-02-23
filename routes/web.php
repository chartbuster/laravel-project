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
    return view('pages.home');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {

    $data = request() ->all();
    echo "Email: " . $data['email'] .'<br>';
    echo "Subject: " . $data['subject'] .'<br>';
        echo "Body: " . $data['body'];
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::post('/signup', function () {

    $data = request() ->all();
    echo "Name: " . $data['name'] .'<br>';
    echo "Email: " . $data['email'] .'<br>';
    echo "Password: " . $data['password1'] .'<br>';
    echo "Confirm Password: " . $data['password2'];
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::post('/login', function () {
});

Route::get('/viewmessage', function () {
    return view('pages.viewmessage');
});

Route::get('/logout', function () {
    return view('pages.logout');
});

Route::get('/card', function () {
    return view('pages.card');
});