<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
  public function index(){
    $items = DB::table('students')
    ->select('id', 'name')
 //   ->where('id', '>', 2)
  //  ->orwhere('id', '=', 1)
    ->get();
    return $items;
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
public function updateData(){
  $item = DB::table('students')->where('id', 2)->update([
    
    ])
}
}
