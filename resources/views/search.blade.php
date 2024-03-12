@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="container">
<div class="input-group mb-3">
  
  <span class="input-group-text">Search</span>
  <input  id="myInput" type="text" class="form-control">
</div>

<table>
  <thead>
  <tr>
    <th>Title</th>
    <th>Content</th>
    <th> Data</th>
  </tr>
  </thead>
  @foreach($todos as $todo)

  <tbody id="myTable">
  <tr>
    <td>{{$todo->title}}</td>
    <td>{{$todo->content}}</td>
    <td>{{$todo->created_at}}</td>
  </tr>
  </tbody>
  @endforeach
</table><br>
<center>
<a class="btn btn-primary" href="{{url('todo')}}">Todo</a>
</center>
</div>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>
@endsection
