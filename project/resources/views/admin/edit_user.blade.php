@extends('layouts.admin_common')     
  @section('contents')
            <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Edit</a>
    </li>
    <li class="breadcrumb-item active">User</li>
  </ol>

     <form method="post" action="{{ url('user/update-profile/'.$user->id) }}"  onsubmit= "return validation()" >
          
          @csrf
    <div class="form-row">
      <div class="form-group col-md-8">
        <label for="user_name">User Name</label>
        <input type="text" name="user_name" class="form-control" id="user_name" placeholder="User Name" autocomplete="off" value="{{$user->user_name}}">
        <span id="name" class="text-danger font-weight-bold"></span>
      </div>
    </div>

       <div class="form-row">
         <div class="form-group col-md-8">
          <label for="user_name">User Balance</label>
          <input type="text" name="user_balance" class="form-control number" id="user_balance" placeholder="Balance Only Number" autocomplete="off" value="{{$user->user_balance}}" >
            <span id="balance" class="text-danger font-weight-bold"></span>
      </div>
    </div>



    <button type="submit" id="submit_btn" class="btn btn-primary" name="submit" value="submit">Update</button>
  </form>

 
  @endsection


      <script>

      function validation(){

      var user_name = document.getElementById('user_name').value;
     

      if( user_name == ""){

        document.getElementById('name').innerHTML= "** please fill the field which name you want to repalace";

        return false;

      }
    



    }

      function validation(){

        var user_balance = document.getElementById('user_balance').value;
     

      if( user_balance == ""){

          document.getElementById('balance').innerHTML= "** please Entered valid Amount";

        return false;

      }
    }
    

    </script>