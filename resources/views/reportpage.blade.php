@extends('master')
@section('content')
<div class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" id="search" name="search" class="form-control" placeholder="Search">
        </div>
        
</div>

<div class="container custom-home">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SNo</th>
      <th scope="col">Name</th>
      <th scope="col">Total Hours</th>
      
      
    </tr>
  </thead>
  <tbody>
@php ($no=1)
@foreach($project as $details)
    <tr>
    <td>{{$no++}}</td>
    <th scope="row">{{$details->project_name}}</th>
   
   @php($project_hours=0)
            @foreach($data as $row)
                
                @if($details->project_ID ==$row->project_ID)
                    @php($project_hours=$project_hours+$row->Hours)
                @endif
               
            @endforeach
            <td>{{$project_hours}}</td>
            </tr>
    @foreach($task as $tasks)
        @if($details->project_ID ==$tasks->project_ID)
        <tr>
        <td></td>
        <td>{{$tasks->task_name}}</td>
            @php($hours=0)
            @foreach($data as $row)
                
                @if($tasks->task_ID ==$row->task_ID)
                    @php($hours=$hours+$row->Hours)
                @endif
               
            @endforeach
            <td>{{$hours}}</td>
            </tr>
            
        @endif
    @endforeach    

@endforeach
  </tbody>
</table>


</div>
@endsection

