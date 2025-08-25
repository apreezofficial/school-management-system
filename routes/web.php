<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
//Web Pages Route
Route::controller(WebController::class)->group(function(){
  Route::get('/', 'index')->name('home');
  Route::get('/', 'index')->name('home');
 // Route::post('/school-stats', 'stats')->name('home.stats');
});
