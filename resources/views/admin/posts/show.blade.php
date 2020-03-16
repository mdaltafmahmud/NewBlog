@extends('layout')
@section('content')
<div class="container">
    <div class="alert alert-dark col-2 display:block" role="alert" ><h4>Result Post</h4> </div>
    <div>
    <a href="{{ route('posts.create') }}" class="btn btn-info" role="button">Create Record</a>
   </div>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Department</th>
        <th scope="col">Roll</th>
        <th scope="col">Age</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{ $data->id }}</th>
        <td> {{ $data->Name }}</td>
        <td>{{ $data->Department }}</td>
        <td>{{ $data->Roll }}</td>
        <td> {{ $data->Age }}</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection