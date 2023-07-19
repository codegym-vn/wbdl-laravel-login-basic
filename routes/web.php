<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    $username = $request->username;
    $password = $request->password;

    if ($username == 'admin'
        && $password == 'admin') {
        return view('welcome_admin');
    }
    return view('login_error');
});
