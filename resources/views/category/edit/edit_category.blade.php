@extends('layouts.default')

@section('head_title')
  Edit Category
@stop

@section('content')
<div>
    <form method="POST">
      @csrf
      <div style="width: 600px; margin-left: auto; margin-right: auto;">
        <h2>Edit Categories!</h2>
        <div>
          <label class="mt-2">name: </label>
          <input type="text" class="form-control" name="name" placeholder="input name" value={{$name}} />
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </div>
    </form>
  </div>
@stop