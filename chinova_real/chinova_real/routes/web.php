<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;

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

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('main');

Route::get('/', function () {
    return view('auth.login');
    });


Route::get('/Product/page', [ProductController::class,'productspage'])->name('add_product');
Route::post('/Product/store',[ProductController::class, 'store'])->name('save.products');
Route::get('/adminPage',[ProductController::class,'adminPage'])->name('admin.page');


Route::post('/login' , [AuthController::class,'login'])->name('login');
Route::get('/signup' , [AuthController::class,'regsterPage'])->name('SignUpPage');
Route::post('/signupuser' , [AuthController::class,'regester'])->name('StoreUser');
Route::get('/loginPage' , [AuthController::class,'getLoginPage'])->name('loginPages');

Route::get('/auth/google', [SocialiteController::class,'redirectToGoogle'])->name('google.uri');
Route::get('/auth/google/callback', [SocialiteController::class,'handleGoogleCallback'])->name('google.handel');


Route::post('/genrateOtp', [OtpController::class,'OtpRequst'])->name('ganerate.Otp');
Route::post('/veriyOtp', [OtpController::class,'Otp'])->name('verify.Otp');
Route::get('/OtpPage', [OtpController::class,'OPTPage'])->name('OPT.page');
Route::get('/OtpVerifyPage', [OtpController::class,'OPTverifyPage'])->name('OPT.verify.page');


