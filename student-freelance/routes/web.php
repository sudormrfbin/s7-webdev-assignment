<?php

use App\Http\Controllers\PostingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Posting;
use App\Models\User;
use App\Models\UserRole;
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
        'postings' => Posting::all(),
    ]);
});

Route::get('/posting/{posting}', function (Posting $posting) {
    return view('posting', [
        'posting' => $posting,
    ]);
});

Route::get('/employers', function () {
    return view('employers', [
        'employers' => User::where('role', UserRole::Employer)->get(),
    ]);
});

Route::get('/user/{user:username}', function (User $user) {
    return view('user', [
        'user' => $user,
    ]);
});

Route::get('/freelancers', function () {
    return view('freelancers', [
        'freelancers' => User::where('role', UserRole::Freelancer)->get(),
    ]);
});

Route::get('login', [SessionController::class, 'create'])->middleware(['guest']);
Route::post('login', [SessionController::class, 'store'])->middleware(['guest']);
Route::get('logout', [SessionController::class, 'destroy'])->middleware(['auth']);

Route::get('register', [RegisterController::class, 'create'])->middleware(['guest']);
Route::post('register', [RegisterController::class, 'store'])->middleware(['guest']);

// TODO: Add custom role middleware
Route::get('posting', [PostingController::class, 'create']);
Route::post('posting', [PostingController::class, 'store']);
