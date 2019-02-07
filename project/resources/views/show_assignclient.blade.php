
@extends('layouts.agent_common') 
  @section('contents')
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
                <th>ClientAdress</th>
                <th>ClientContact</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach($assign as $assigns)
              <tr> 
                   <td>{{$assigns->client_name}}</td>
                   <td>{{$assigns->client_address}}</td>
                    <td>{{$assigns->client_contact}}</td>
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