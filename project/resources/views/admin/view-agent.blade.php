@extends('layouts.admin_common')       
  @section('contents')


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
                <th>Deposit_Date</th>
                <th>AgentType</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$agent->agent_id}}</td>
                <td>{{$agent->agent_name}}</td>
                <td>{{$agent->agent_address}}</td>
                <td>{{$agent->agent_contact}}</td>
                <td>{{$agent->bal_deposite_date}}</td>
                <td>{{$agent->agent_type}}</td>
              
                      <td>
                        <a href="{{ URL::previous('agentshow') }}">Go Back</a>
                        <a href="{{ url('agent/delete-profile/'.$agent->agent_id )}}"> Delete</a>
                    </td>  
                    </tr>     
            </tbody>
          </table>
        </div>
      </div>         
</div>
</div>


@endsection