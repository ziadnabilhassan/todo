@extends('layouts.app')
@section('content')
<form action="{{route('todo.update',$todos->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="container">
<div class="mb-3">
  <label  class="form-label">Title</label>
  <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title" id="tilte" value="{{$todos->title}}">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label" >content</label>
  <textarea class="form-control  @error('content') is-invalid @enderror " name="content" id="content" rows="3">{{$todos->content}}</textarea>
  <button type="submit" value="Submit" class="btn btn-primary">save</button>
</div>
</form>
</div>
<center>
<div class="container">
<a class="btn btn-primary" href="{{url('todo')}}">Todo</a>
</div>
</center>
@endsection
