@extends('master')
@section('content')
<div class="container custom-home">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SNo</th>
      <th scope="col">Project Name</th>
      <th scope="col">Status</th>
     
    </tr>
  </thead>
  <tbody>
   @foreach($projects as $project)
   <tr>
      <th scope="row">{{$project->project_ID}}</th>
      <td>{{$project->project_name}}</td>
      <td>{{$project->status}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


</div>
@endsection