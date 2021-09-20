@extends('master')
@section('content')
<div class="container custom-home">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SNo</th>
      <th scope="col">Project Name</th>
      <th scope="col">Task Name</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $row)
   <tr>
      <th scope="row">{{$row->task_ID}}</th>
      <td>{{$row->project_name}}</td>
      <td>{{$row->task_name}}</td>
      <td>{{$row->status}}</td>

    </tr>
    @endforeach
  </tbody>
</table>


</div>
@endsection