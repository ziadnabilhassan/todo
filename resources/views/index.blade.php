@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<form action="{{route('todo.store')}}" method="POST" autocomplete="off">
@csrf
<div class="container">
<center>
<a class="btn btn-primary" href="{{url('todo/search')}}">Search</a>
</center>
<div class="mb-3">
  <label  class="form-label">Title</label>
  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="tilte" placeholder="title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label" >content</label>
  <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3"></textarea>
  <button type="submit" value="Submit" class="btn btn-primary" style="margin:12px">save</button>
</div>
</form>

@foreach($todos as $todo)
<div class="card" style="margin-top:10px">
  <div class="card-header">
    <h2>{{$todo->title}}</h2>
    <h5 class="card-title">   Data: {{$todo->created_at}}</h5>

  </div>
  <div class="card-body">
    <h5 class="card-title">    {{$todo->content}}</h5>
  </div>
  <form action="{{route('todo.destroy',$todo->id)}}" method="POST">
  @csrf
  @method('DELETE')
  <div class="card-body">
  <button type="submit"  class="btn btn-danger">Delete</button>
  </div>
  </form>
  <form action="{{route('todo.edit',$todo->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('GET')
  <button type="submit"  class="btn btn-primary" style="margin:12px">Update</button>
  </form>
  

</div>
@endforeach

</div>
@endsection
