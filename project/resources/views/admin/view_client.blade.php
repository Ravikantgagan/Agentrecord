@extends('layouts.admin_common')       
  @section('contents')


          <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        client Record </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>ClientName</th>
                <th>ClientAddress</th>
                <th>ClientContact</th>
                <th>ClintType</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$client->client_id}}</td>
                <td>{{$client->client_name}}</td>
                <td>{{$client->client_address}}</td>
                <td>{{$client->client_contact}}</td>
                <td>{{$client->client_type}}</td>
              
                      <td>
                        <a href="{{ URL::previous('clientshow') }}">Go Back</a>
                        <a href="{{ url('client/delete-profile/'.$client->client_id )}}" onclick="return myFunction();"> Delete</a>
                    </td>  
                    </tr>     
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