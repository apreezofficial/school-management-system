@extends('layouts.app')
@section('content')
<form action="{{ url(/students/create) }}">
  Create student
  <input type="text" placeholder="name" name="name">
    <input type="email" placeholder="email" name="email">
      <input type="number" placeholder="age" name="age">
</form>
@endsection