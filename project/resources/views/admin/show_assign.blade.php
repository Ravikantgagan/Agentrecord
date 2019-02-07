@extends('layouts.admin_common')       
  @section('contents')

<!-- @if(session('message'))
<p class="alert alert-success"></p>
@endif -->
  
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
              </tr>
            </thead>

            <tbody>
              @foreach($assign as $assigns)
              <tr> 
                <td>{{$assigns->client_name}}</td>
                <td>{{$assigns->agent_name}}</td>
                </tr>     
             
                @endforeach
          
            </tbody>
          </table>
        </div>
      </div>         
</div>
</div>

<!-- <script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script> -->
 
@endsection