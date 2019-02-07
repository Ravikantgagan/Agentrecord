@extends('layouts.admin_common')       
  @section('contents')

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Assign</a>
  </li>
  <li class="breadcrumb-item active">Client & Agent</li>
</ol>
<div class="container">
  <form method="post" action="{{ url ('clientagentstore') }}">
  	 @csrf
    <div class="form-group">
      <div class="row"></div>
     <label for="sel2"><b>SelectClient</b></label>

      <select multiple class="form-control" id="sel2" name="client_id">
      	 @foreach ($client as $clients)
       				 <option value="{{ $clients->client_id }}" >{{ $clients->client_name }}</option>
        @endforeach
       			
      	</select>

       <div class="form-group">
     	<label for="sel2" class="mt-4"><b>SelectAgent</b></label>

      	<select multiple class="form-control mt-2" id="sel3" name="agent_id">
        @foreach ($agent as $agents)
       	<option value="{{ $agents->agent_id }}" >{{ $agents->agent_name }}</option>
        @endforeach
      </select>

      <center> <button type="submit" id="submit_btn" class="btn btn-primary mt-4">Assign</button><center>


  </form>
</div>
<!-- 
@if(Session::has('message'))
<div id="alerts">
  <div class="alert alert-dismissable alert-{{ Session::get('alert-class alert-danger', 'success') }}">{{ Session::get('message') }}
    <button class="close" role="close" data-dismiss="alert">&times;</button>
  </div>
</div>
@endif
 -->
   <div class="alert alert-success fade in">
    <a href="{{ url ('clientagentstore') }}" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> Successfully Assign.
</div>



          <!-- DataTables Example -->

    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Assign Record </div>
       <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ClientName</th>
                <th>AgentName</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach($assign as $assigns)
              <tr> 
                   <td>{{$assigns->client_name}}</td>
                   <td>{{$assigns->agent_name}}</td>
                    <td>
                  <a href="{{ url('assignclient/delete-profile/'.$assigns->id )}}" onclick="return myFunction();"> Delete</a>
                    </td>
                </tr>     
             
                @endforeach
          
            </tbody>
          </table>
        </div>
      </div>         
  </div>
</div>

<script>
  function myFunction() {
      if(!confirm("!! Are You Sure Delete AgentName And ClientName"))
      event.preventDefault();
  }
 </script>

  @endsection
