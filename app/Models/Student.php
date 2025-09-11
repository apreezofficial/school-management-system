<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
  Use HasFactory;
  Use SoftDeletes;
 protected $fillable =[
   'name',
   'email',
   'age',
   ];
   public function scopeAge($query){
  return $query->where('age', '>', 10);
}
}
