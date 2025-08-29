<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
  protected $name;
  public function __construct(){
    
    $this->name = "apcodrsphefe";
  }
    public function index(){
     // return 'Welcome to' . $name . 'the home of' . $tagline;
     $name = $this->name;
     return $name;
     // return view('home', ['school_name' => $name,]);
    }
    private function test(){
      return 'How ??';
    }
}
