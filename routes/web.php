<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PSettingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();
Route::get('/h',function (){
    return view('welcome');
});

Route::get('/admin/edit/portfolio/settings',[PSettingsController::class , 'edit'])->name('admin.Psettings');


Route::get('/',[HomeController::class , 'index'])->name('portfolio');
route::get('/admin/dashboard',[DashboardController::class , 'index'])->name('admin.dashboard');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
