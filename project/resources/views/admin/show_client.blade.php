@extends('layouts.admin_common')       
  @section('contents')
<!-- 
@if(session('message'))
<p class="alert alert-success"></p>
@endif -->
  
          <!-- DataTables Example -->

    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Client Record </div>
       <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          

            <thead>
  
              <tr>
                <th>No</th>
                
                <th>ClientName</th>
                <th>ClientAddress</th>
                <th>ClientContact</t>
                 <th>AgentType</th>
                
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if(count($clients))
              @foreach($clients as $client)
              <tr>
                
                <td>{{$client->client_id}}</td>
                <td>{{$client->client_name}}</td>
                  <td ><?php echo wordwrap($client->client_address,15,"<br>\n");?></td>
                <td>{{$client->client_contact}}</td>
                 <td>{{$client->client_type}}</td>
                
                
                <td>
                 &nbsp;<a href="{{ url('client/view-profile/'.$client->client_id )}}" >View</a>
                   &nbsp;<a href="{{ url('client/edit-profile/'.$client->client_id )}}"> Edit</a>
                        <a href="{{ url('client/delete-profile/'.$client->client_id )}}" onclick="return myFunction();"> Delete</a>
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

<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>
 
@endsection




            
                  
         

            