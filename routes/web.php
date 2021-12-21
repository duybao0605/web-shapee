<?php

//frontend
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\RatingController;
use App\Http\Controllers\frontend\Login_SignupController;

//admin
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\admin\AdminController;




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

//front end
//index
Route::get('/', [IndexController::class, 'index']);

Route::group([
	'middleware' => ['customer'],
], function () {
    //signup
    Route::get('login', [Login_SignupController::class, 'indexLogin'])->middleware('customerNotLogin');
    Route::post('login', [Login_SignupController::class, 'login'])->name('user.login');
    //login
    Route::get('signup', [Login_SignupController::class, 'indexSignup'])->middleware('customerNotLogin');
    Route::post('signup', [Login_SignupController::class, 'createUser'])->name('user.create');
    //logout
    Route::get('logout', [Login_SignupController::class, 'logout']);

    //contact
    Route::post('contact', [ContactController::class, 'sendContact'])->name('contact.send');
    //rate
    Route::post('rate', [RatingController::class, 'sendRate'])->name('rate.send');
    //Profile
    Route::get('/profile/{id}', [UserController::class, 'index']);
    Route::post('/profile/{id}',[UserController::class, 'edit']);
});


//admin 
Auth::routes();
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Auth'
], function () {
    Route::get('/login', [LoginController::class, 'showLoginForm']);
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/logout', [LoginController::class, 'logout']);
});
Route::group([
	'prefix' => 'admin',
	'namespace' => 'admin',
	'middleware' => ['admin'],

], function (){
	//admin
    //dash board
	Route::get('/dashboard', [DashBoardController::class, 'index']);
    //user Profile
    Route::get('/profile/{id}', [AdminController::class, 'index']);
	Route::post('/profile/{id}',[AdminController::class, 'edit']);

});
