<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SecondTestController;
use App\Http\Controllers\TeachersController;
use App\Models\Teachers;
//Web Pages Route
//Route::get('invoke', TestController::class);

//Route::resource('re', SecondTestController::class);
/*** Route::controller(WebController::class)->group(function(){
  
  
  Route::get('/{name}/{tagline}', 'index')->name('home');
  Route::get('/', 'index')->name('home');
 // Route::post('/school-stats', 'stats')->name('home.stats');
});
***/
Route::get('/about', function(){
  $name = "Presh";
  $email = "tester@gmail.com";
//  return view('about')->with('school_name', $name)->with('contact_email', $email);
//  return view('about', compact('name', 'email'));
  return view('about', ['name' => $name, 'email' => $email]);
});
Route::view('/test', 'test');
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
Route::get('teachers', [TeachersController::class, 'index']);
Route::controller(StudentController::class)->group(function(){
    Route::get('/', 'index')->name('main');
Route::get('create', 'addData');
Route::get('update', 'update');
Route::get('stats', 'stats');
Route::get('age', 'age_guide');
Route::get('restore', 'restore');
Route::get('delete1', 'delete1');
  //  Route::get('show/{id}', 'show');
   // Route::get('update/{id}', 'update');
  });
Route::fallback(function(){
  return view('404');
});
