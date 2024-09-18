<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Suggested code may be subject to a license. Learn more: ~LicenseLog:196193281.
Route::get('/users', function () {
    // return view('about');
    foreach(User::all() as $user){
        dump($user->name);
        // dump($user->email);
        // update from corp
        //update from own
    }
});

Route::get('/contact', function () {
    return view('contact');

});