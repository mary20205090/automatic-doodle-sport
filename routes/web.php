<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdultController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\KidPointController;
use App\Http\Controllers\AuthController;



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
    return view('welcome');
});


Route::view('add','addadult');
Route::post('add',[AdultController::class,'addData']);
Route::get('viewadult',[AdultController::class,'showAdult']);

// Add Points
Route::view('home','register');
Route::view('addpoints','addpoints');
Route::get('addpoints',[PointController::class,'index']);
// delete
Route::get('delete/{id}',[AdultController::class,'delete']);
// update points
Route::get('addpoints/{id}',[PointController::class,'geById']);
Route::post('addpoints',[PointController::class,'addPoints']);
Route::get('viewpoints',[PointController::class,'viewAdult']);
// deleteadult
Route::get('delete2/{id}',[PointController::class,'deleteAdult']);

// add kids
Route::view('addkid','addkid');
Route::post('addkid',[KidController::class,'addKid']);
Route::get('viewkid',[KidController::class,'showKid']);
// add kid points
Route::view('updatekid','updatekid');
Route::get('updatekid',[KidPointController::class,'index']);
// delete
Route::get('delete1/{id}',[KidController::class,'deleteKid']);

// get kids by id 
Route::get('updatekid/{id}',[KidPointController::class,'getById']);
Route::post('updatekid',[KidPointController::class,'addPoint']);
Route::view('view','viewallkids');
Route::get('view',[KidPointController::class,'viewKid']);
// bargraph
Route::view('home','draft');
Route::get('home', [PointController::class, 'bar']);





Route::controller(AuthController::class)->group(function(){

    Route::get('login','index')->name('login');

    Route::get('addUser', 'addUser')->name('addUser'); 

    Route::get('logout', 'logout')->name('logout');

    Route::post('validate_add', 'validate_add')->name('Auth.validate_add');

    Route::post('validate_login', 'validate_login')->name('validate_login');

    Route::get('dashboard', 'dashboard')->name('dashboard');

    Route::get('fetch.viewusers','viewusers')->name('fetch.viewusers');
});

















