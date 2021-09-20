@extends('master')
@section('content')
<div class="container custom-home">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SNo</th>
      <th scope="col">Project Name</th>
      <th scope="col">Task Name</th>
      <th scope="col">Hours</th>
      <th scope="col">Date</th>
      <th scope="col">Description</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $row)
   <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->project_name}}</td>
      <td>{{$row->task_name}}</td>
      <td>{{$row->Hours}}</td>
      <td>{{$row->date}}</td>
      <td>{{$row->description}}</td>


    </tr>
@endforeach
  </tbody>
</table>


</div>
@endsection