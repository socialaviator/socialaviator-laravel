<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;

Route::match(['get', 'post'], '/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'index']);
Route::get('/contact_us', [HomeController::class,'contact_us']);
Route::get('/about_us', [HomeController::class,'about_us']);

Route::get('/reports', [ReportController::class,'report_list']);
Route::get('/reports/{slug}', [ReportController::class,'single_report']);
Route::get('/buy/{num}', [ReportController::class,'report_buy']);
Route::get('/request_sample/{num}', [ReportController::class,'request_sample']);
