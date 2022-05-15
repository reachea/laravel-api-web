@extends('layouts.default')

@section('head_title')
  Category
@stop

@section('content')
  <div class="d-flex" style='justify-content: space-between;'>
    <h2>Category List</h2>
    <div>
      <a href='/category/add'>
        <button class='btn btn-primary'>Add</button>
      </a>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @if (count($categories) > 0)
          @foreach($categories as $category)
              <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td class="d-flex">
                  <a href='/category/edit/{{$category->id}}'>
                    <button class="btn btn-success" style='margin-right: 10px;'>
                      Edit
                    </button>
                  </a>

                  <button class="btn btn-danger">
                    Delete
                  </button>
                </td>
              </tr>
          @endforeach
        @else
          No Data
        @endif
    </tbody>
  </table>
@stop