@extends('layouts.admin_common')       
  @section('contents')

@if(session('message'))
<p class="alert alert-success"></p>
@endif
  
          <!-- DataTables Example -->

    <div class="card mb-3">
      <div class="card-header">

        <i class="fas fa-table"></i>
        Users Record </div>
       <div class="card-body">
            <a href="{{ url('/user/register')}}" class="btn btn-secondary mb-3" >Register</a>

            

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
               @if(count($users))
              @foreach($users as $user)
              <tr>
                
                <td>{{$user->id}}</td>
                <td>{{$user->user_name}}</td>
                <td>{{$user->user_balance}}</td>

                  <td>
                   &nbsp;<a href="{{ url('user/view-profile/'.$user->id )}}">View</a>
                   &nbsp;<a href="{{ url('user/edit-profile/'. $user->id )}}"> Edit</a>
                        <a href="{{ url('user/delete-profile/'. $user->id )}}"> Delete</a>
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

                
                
                 
                
           
          
                
    



            
                  
         

            