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
  <li class="breadcrumb-item active">Agent</li>
</ol>

<form method="post" id="add_agent_form_id" action=" {{ url('/agent/store') }}" >
  @csrf

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="agent_name">Agent Name</label>
      <input type="text" name="agent_name" class="form-control" id="agent_name" placeholder="Agent Name" autocomplete="off">
    </div>
    <div class="form-group col-md-6">
      <label for="agent_contact">Agent Contact</label>
      <input type="text" name="agent_contact" class="form-control number" id="agent_contact" placeholder="9809876543" autocomplete="off">
    </div>
  </div>
  <div class="form-group">
    <label for="agent_address">Agent Address</label>
    <input type="text" name="agent_address" class="form-control" id="agent_address" placeholder="1234 Main St" autocomplete="off">
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="agent_type">Agent Type</label>
      <input type="text" name="agent_type" id="agent_type" class="form-control"  autocomplete="off">
      
      
    </div>
  </div>


  <button type="button" id="submit_btn" class="btn btn-primary">Register</button>
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


        