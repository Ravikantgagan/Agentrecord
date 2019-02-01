        @extends('layouts.admin_common')     
        @section('contents')


        @if(session('message'))
        <p class="alert alert-success"></p>
        @endif
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Register</a>
        </li>
        <li class="breadcrumb-item active">User</li>
        </ol>

        <form method="post" id="add_user_form_id" action=" {{ url('/user/store') }}" >
        @csrf

        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="agent_name">User Name</label>
            <input type="text" name="user_name" class="form-control" id="user_name" placeholder="User Name" autocomplete="off" required="must be fill">
             <span id="name" class="text-danger font-weight-bold"></span>
          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="user_balance">User Balance</label>
            <input type="text" name="user_balance" class="form-control number" id="user_balance" placeholder="Balance Only Number" autocomplete="off" required="must be fill">
             <span id="balance" class="text-danger font-weight-bold"></span>
          </div>
        </div>

        <button type="submit" id="submit_btn" class="btn btn-primary" value="submit">Register</button>
        </form>


          

        @endsection


              