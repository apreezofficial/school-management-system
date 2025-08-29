@extends('layouts.app')
@section('styles')
<style>
  body{
    background: green;
  }
</style>
@endsection
@section('content')
        <hero>
          <div>
            <h1>Welcome to {{ $school_name }}</h1>
         <h4>Upschool is your ultimate learning school eniviroment</h4>
          </div>
        </hero>
  @endsection