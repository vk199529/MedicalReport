<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;


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
Route::get('/', function () {
    return redirect('/login');
});

// Route::get('/' ,[MedicineController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
		Route::get('/logout',[App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
		Route::get('/medicine/new' ,[MedicineController::class, 'create'])->name('medicine.new');
		Route::post('/medicine/store' ,[MedicineController::class, 'store'])->name('medicine.store');
		Route::get('/medicine/edit/{id}' ,[MedicineController::class, 'edit'])->name('medicine.edit');
		Route::put('/medicine/update/{id}' ,[MedicineController::class, 'update'])->name('medicine.update');
		Route::get('/medicine/delete/{id}' ,[MedicineController::class, 'delete'])->name('medicine.delete');
	});
});