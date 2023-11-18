<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Employer;
use App\Models\Freelancer;
use App\Models\Posting;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;

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
        'employers' => Employer::all(),
    ]);
});

Route::get('/employer/{employer:username}', function (Employer $employer) {
    return view('employer', [
        'employer' => $employer,
    ]);
});

Route::get('/freelancers', function () {
    return view('freelancers', [
        'freelancers' => Freelancer::all(),
    ]);
});

Route::get('/freelancer/{freelancer:username}', function (Freelancer $freelancer) {
    return view('freelancer', [
        'freelancer' => $freelancer,
    ]);
});


Route::get('login', [SessionController::class, 'create'])->middleware(['guest']);
Route::post('login', [SessionController::class, 'store'])->middleware(['guest']);
Route::get('logout', [SessionController::class, 'destroy'])->middleware(['auth']);

Route::get('register', [RegisterController::class, 'create'])->middleware(['guest']);
Route::post('register', [RegisterController::class, 'store'])->middleware(['guest']);
