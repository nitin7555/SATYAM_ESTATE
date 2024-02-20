<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\NavbarController;

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
Route::get('/',function(){
    return redirect('/listing');
});

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/signup',[CustomAuthController::class,'signup']);
Route::post('/signup',[CustomAuthController::class,'storeUser']);
Route::post('/login',[CustomAuthController::class,'getUser']);
Route::get('/logout',[CustomAuthController::class,'logout']);
Route::get('/forget-password',[CustomAuthController::class,'forgetPassword']);
Route::post('/forget-password',[CustomAuthController::class,'forgetUserPassword']);
Route::get('reset-password-email/{token}',[CustomAuthController::class,'resetPasswordEmail']);
Route::post('/reset-password',[CustomAuthController::class,'resetUserPassword']);

Route::resource('/listing',ListingController::class);
Route::post('/upload',[ListingController::class,'upload'])->name('ckeditor.upload');


Route::get('/contact-us',[NavbarController::class,'contactUs']);
Route::post('/contact-us',[NavbarController::class,'enquiryMail']);
Route::get('/about-us',[NavbarController::class,'aboutUs']);
Route::get('/search',[NavbarController::class,'search']);
Route::get('/post-requirement',[NavbarController::class,'postRequirement']);
Route::post('/post-requirement',[NavbarController::class,'postRequirementMail']);
Route::get('/property-for-sale',[NavbarController::class,'propertyForSale']);
