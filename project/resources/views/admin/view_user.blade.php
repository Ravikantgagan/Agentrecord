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
                   <th>UserName</th>
                    <th>UserBalance</th>
                      <th>Action</th>
                    </tr>
                </thead>
                  
                 <tbody>

                <tr>
               <td>{{$user->id}}</td> 
                 <td>{{$user->user_name}}</td>
                    <td>{{$user->user_balance}}</td>
                      <td>
                        <a href="{{ URL::previous('showuser') }}">Go Back</a>
                        <a href="{{ url('user/delete-profile/'.$user->id )}}"> Delete</a>
                        </td>  
                    </tr> 
                                    
                
            </tbody>
          </table>
        </div>
      </div>         
</div>

</div>

@endsection
                
                
          
               
                
                
                
                
                 
                    
                        
             
      