<?php

use App\Http\Controllers\adadmin;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Settings\AccountController;

use Illuminate\Support\Facades\Route;



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
Route::get('/adadmin',[adadmin::class,'see'])->name('adadmin');
Route::post('add',[adadmin::class,'Addata']);
Route::get('/login',[adadmin::class,'see1'])->name('login');
Route::post('/login',[loginController::class,'postlogin']);
Route::get('/contacts',[contactController::class,'index'])->name('contacts.index')->middleware('auth');;
Route::get('/contacts/create',[contactController::class,'create'])->name('contacts.create')->middleware('auth');;
Route::get('/contacts/{id}',[contactController::class,'show'])->name('contacts.show');
Route::get('wellu',function(){
 return view('wellu');
});
Route::post('/contacts/store',[contactController::class,'store'])->name('contacts.store')->middleware('auth');
Route::get('/contacts/{id}/edit',[contactController::class,'edit'])->name('contacts.edit')->middleware('auth');
Route::put('/contacts/{$id}/edit',[contactController::class,'update'])->name('contacts.update')->middleware('auth');
Route::delete('/contacts/{$id}',[contactController::class,'destory'])->name('contacts.destory')->middleware('auth');

// Route::get('/settings/account', [AccountController::class, 'index']);
Route::get('Setting/profile',[App\Http\Controllers\setting\ProfileController::class,'edit'])->name('setting.profile.edit');
Route::put('Setting/profile',[App\Http\Controllers\setting\ProfileController::class,'update'])->name('setting.profile.update');
// Route::get('companies/companyshow',[CompaniesController::class,'companyshow'])->name('companies.companyshow')->middleware('auth');


Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('companies/showcompany',[CompaniesController::class,'companyshow'])->name('companies.showcompany')->middleware('auth');;


