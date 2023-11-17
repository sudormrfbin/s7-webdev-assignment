<?php

use App\Models\Posting;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/postings', function () {
    return view('postings', [
        'postings'=> Posting::all(),
    ]);
});

Route::get('/posting/{posting}', function (Posting $posting) {
    return view('posting', [
        'posting'=> $posting,
    ]);
});
