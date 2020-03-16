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
      </tr>
    </thead>
    <tbody>


    @foreach ($students as $student)
      <tr>
        <th scope="row">1</th>
        <td>{{ $student->Name }}</td>
        <td>{{ $student->Department }}</td>
        <td>{{ $student->Roll }}</td>
        <td>{{ $student->Age }}</td>
      </tr>
      @endforeach
 
 
    </tbody>
  </table>
</div>
@endsection