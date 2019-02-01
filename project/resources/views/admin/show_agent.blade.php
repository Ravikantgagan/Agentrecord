@extends('layouts.admin_common')       
  @section('contents')

@if(session('message'))
<p class="alert alert-success"></p>
@endif
  
          <!-- DataTables Example -->

    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Agent Record </div>
       <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          

            <thead>
  
              <tr>
                <th>No</th>
                
                <th>AgentName</th>
                <th>AgentAddress</th>
                <th>AgentContact</th>
                 <th>AgentType</th>
                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if(count($agents))
              @foreach($agents as $agent)
              <tr>
                
                <td>{{$agent->agent_id}}</td>
                <td>{{$agent->agent_name}}</td>
                <td>{{$agent->agent_address}}</td>
                <td>{{$agent->agent_contact}}</td>
                
                 <td>{{$agent->agent_type}}</td>
                
                
                <td>
                 &nbsp;<a href="{{ url('agent/view-profile/'.$agent->agent_id )}}">View</a>
                   &nbsp;<a href="{{ url('agent/edit-profile/'.$agent->agent_id )}}"> Edit</a>
                        <a href="{{ url('agent/delete-profile/'.$agent->agent_id )}}"> Delete</a>
                    </td>  
                    </tr>     
             
                      @endforeach
                      @endif
            </tbody>
          </table>
        </div>
      </div>         
</div>
</div>
@endsection




            
                  
         

            