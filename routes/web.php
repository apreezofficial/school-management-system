<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
//Web Pages Route
Route::controller(WebController::class)->group(function(){
  Route::get('/', 'index')->name('home');
 // Route::post('/school-stats', 'stats')->name('home.stats');
});
Route::get('/test', function(){
  return 'Testing Route cache';
});
Route::prefix('details')->group(function(){
  Route::get('/teachers', function(){
  return 'Testing Route cache for teachers';
})->name('details.teachers');
Route::get('/students/{id}', function($id){
  return 'Testing Route cache for students with id' . $id . 'Tada';
})->name('details.student');
});
Route::fallback(function(){
  return "404 | Page Not Found";
});