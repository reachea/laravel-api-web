@extends('layouts.default')

@section('head_title')
  Home
@stop

@section('content')
  <div>
    <h1>This is home page!</h1>
  </div>

  <p class="mt-5">Current User: {{ $email ? $email : 'No User' }}</p>
@stop