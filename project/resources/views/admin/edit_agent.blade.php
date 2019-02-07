  @extends('layouts.admin_common')     
  @section('contents')
            <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Edit</a>
    </li>
    <li class="breadcrumb-item active">Agent</li>
  </ol>

     <form method="post" action="{{ url('agent/update-profile/'.$agent->agent_id) }}">
          
          @csrf

          
     <div class="form-group">
      <label for="agent_address">Agent Name</label>
      <input type="text" name="agent_name" class="form-control" id="agent_name" placeholder="name" autocomplete="off" value="{{$agent->agent_name}}">
    </div>


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="agent_name">Deposit_Date</label>
       <input type="text" name="bal_deposite_date" class="form-control" id="agent_date" placeholder="2018-04-27" autocomplete="off" value="{{ $agent->bal_deposite_date}}">
      </div>

      <div class="form-group col-md-6">
        <label for="agent_contact">Agent Contact</label>
        <input type="text" name="agent_contact" class="form-control number" id="agent_contact" placeholder="9809876543" autocomplete="off" value="{{$agent->agent_contact}}">
      </div>
    </div>

    <div class="form-group">
      <label for="agent_address">Agent Address</label>
      <input type="text" name="agent_address" class="form-control" id="agent_address" placeholder="1234 Main St" autocomplete="off" value="{{$agent->agent_address}}">
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="agent_type">Agent Type</label>
        <input type="text" name="agent_type" id="agent_type" class="form-control" autocomplete="off" value="{{$agent->agent_type}}">
        
        
      </div>
      
    </div>
    <button type="submit" id="submit_btn" class="btn btn-primary">Update</button>
  </form>

  <script type="text/javascript">
    $(document).on('click', '#submit_btn', function(){
      var agent_type = $('#agent_type').val().trim();
      var agent_name = $('#agent_name').val().trim();
      var err = '';
      if (agent_name == '') {
        err = 'error';
        $('#agent_name').addClass('error');
      }
      else {
        err = '';
        $('#agent_name').removeClass('error');
      }

      if (agent_type == '') {
        err = 'error';
        $('#agent_type').addClass('error');
      }
      else {
        err = '';
        $('#agent_type').removeClass('error');
      }
      if ( err != 'error' || err == '') {
        $('#add_agent_form_id').submit();
      }
    })
  </script>
  @endsection


        