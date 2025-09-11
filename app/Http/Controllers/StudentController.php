<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
  public function age_guide(){
    $item = Student::age()->get();
    return $item;
  }
  public function index(Request $request){
  //  $items = DB::table('students')
   // ->where(function ($query){
   //   $query->whereAll(['age', 'id', 'user_id'], '>=', 0);
   // })
 //   ->where('id', '>', 2)
  //  ->orwhere('id', '=', 1)
   // ->get();
  //  return $items;
//  $item = Student::onlyTrashed()->get();
//$item = Student::withTrashed()->get();
  $students = Student::when($request->search, function($query){
    return $query->whereAny([
      'name',
      'email'
      ]);
  });
  return view('student.index', compact('students'));
  }
  public function restore(){
    $item = Student::withTrashed()->find(3)->restore();
    return "success";
  }
public function addData(){
  DB::table('students')->insert(
    [
    'name' => 'ax',
         'age' => 90,
        'email' => 'asbaa@aaa.aabbha',
        'date_of_birth' => Date('Y-m-d'),
        'user_id' => 4
    ]
    );
    return 'yeah..';
}
public function stats(){
 $items = DB::table('students')->count();   return $items;
}
public function update(){
  DB::table('students')->where('id', 2)->update([
    'name' => 'Updated name',
    ]);
    return 'apx';
}
public function delete1(){
  $item = Student::where('id', 3)->forceDelete();
  return "deleted";
}
}
