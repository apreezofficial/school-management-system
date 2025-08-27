<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
//Web Pages Route
Route::controller(WebController::class)->group(function(){
  Route::get('/', 'index')->name('home');
 // Route::post('/school-stats', 'stats')->name('home.stats');
});
Route::get('/about', function(){
  $name = "Presh";
  $email = "tester@gmail.com";
//  return view('about')->with('school_name', $name)->with('contact_email', $email);
//  return view('about', compact('name', 'email'));
  return view('about', ['name' => $name, 'email' => $email]);
});
Route::view('/test', 'about', ['name' => 'Presh', 'email' => 'tester@gmail.com']);
/**
 * 
 * Route::get('/test', function(){
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
*/
Route::fallback(function(){
  return view('404');
});