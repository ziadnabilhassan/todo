@extends('layouts.app')

@section('content')
<center>
<div class="container">
<a class="btn btn-primary" href="{{url('todo')}}">Todo</a>
</div>
</center>
<div class="card" style="margin-top:10px">
  <div class="card-header">
    <h2>Title</h2>
    <h5 class="card-title">   Data:date of crated</h5>

  </div>
  <div class="card-body">
    <h5 class="card-title">Content : It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</h5>
  </div>
  <div class="card-body">
  <button type="submit"  class="btn btn-danger">Delete</button>
  </div>
  <div class="card-body">

  <button type="submit"  class="btn btn-primary" style="margin:12px">Update</button>
</div>
@endsection
