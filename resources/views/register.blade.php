@extends('layouts.default')

@section('head_title')
  Register
@stop

@section('content')
  <div style="text-align: center;">
    <h1>This is register page!</h1>
  </div>

  <div>
    <form method="POST">
      @csrf
      <div style="width: 600px; margin-left: auto; margin-right: auto;">
        <h3>Register Account!</h3>
        <div>
          <label class="mt-2">Email: </label>
          <input type="text" class="form-control" name="email" placeholder="input email"/>
        </div>
        <div>
          <label class="mt-2">Passowrd: </label>
          <input type="password" class="form-control" name="password" placeholder="input password" />
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>

        <p class="mt-5">Current User: {{ $email ?? 'No User' }}</p>
      </div>
    </form>
  </div>
@stop