@extends('layout')
@section('content')
<div class="container">
    <div class="alert alert-dark col-3 display:block" role="alert" ><h4>Create student</h4> </div>

@if (Session::has('success'))
    {{ Session::get('success') }}
@endif

    @if($errors->any())
       <div class="alert alert-danger">
           <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
           </ul>
       </div>
    @endif
   <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="text">Name:</label>
      <input type="name" name="Name" class="form-control  col-5"/>
      <label for="text">Department:</label>
      <input type="text" name="Department" class="form-control  col-5"/>
      <label for="number">Roll:</label>
      <input type="text" name="Roll" class="form-control col-5"/>
      <label for="number">Age:</label>
      <input type="number" name="Age" class="form-control  col-5"/>
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>

</div>
@endsection
