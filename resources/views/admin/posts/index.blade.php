@extends('layout')
@section('content')
<div class="container">
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Department</th>
        <th scope="col">Roll</th>
        <th scope="col">Age</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>


    @foreach ($data as $student)
      <tr>
        <th scope="row">1</th>
        <td>{{ $student->Name }}</td>
        <td>{{ $student->Department }}</td>
        <td>{{ $student->Roll }}</td>
        <td>{{ $student->Age }}</td>
       <td>
         <a href="{{ route('posts.show',$student->id) }}"><button class="btn btn-secondary">Show</button> </a>
         <a href="{{ route('posts.edit',$student->id) }}"><button class="btn btn-info">Edit </button></a>
        </td>
      </tr>
      @endforeach
 
 
    </tbody>
  </table>
</div>
@endsection