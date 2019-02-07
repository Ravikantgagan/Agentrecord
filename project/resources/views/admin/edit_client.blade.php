  @extends('layouts.admin_common')     
  @section('contents')
            <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Edit</a>
    </li>
    <li class="breadcrumb-item active">Client</li>
  </ol>

     <form method="post" action="{{ url('client/update-profile/'.$client->client_id) }}">
          
          @csrf

     
  <div class="form-group">
    <label for="client_name">Client Name</label>
    <input type="text" name="client_name" class="form-control" id="client_name" placeholder="Client Name" value="{{$client->client_name}}">
  </div>


  <div class="form-row">
   <!--  <div class="form-group col-md-6">
      <label for="agent_date">Date</label>
      <input type="text" name="bal_deposite_date" class="form-control" id="agent_date" placeholder="2018-04-27" autocomplete="off">
    </div> -->
    <div class="form-group col-md-12">
      <label for="agent_contact">Client Contact</label>
      <input type="number" name="client_contact" class="form-control {{ $errors->has('client_contact') ? ' is-invalid' : 'Phone Number is invalid' }}" id="client_contact" placeholder="9809876543" value="{{$client->client_contact}}" >
      @if ($errors->has('client_contact'))
         <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('client_contact') }}</strong>
        </span>
         @endif
    </div>
  </div>



  <div class="form-group">
    <label for="agent_address">Client Address</label>
    <input type="text" name="client_address" class="form-control" id="client_address" placeholder="1234 Main St" value="{{$client->client_address}}" >

  </div>
<select class="browser-default custom-select" name="client_type" value="{{$client->client_name}}">
  <option selected>Choose Client Type</option>
  <option value="Regular">Regular</option>
  <option value="Part time">Part Time</option>
  <option value="Full Time">Full Time</option>
</select><br>

  


  <button type="submit" id="submit_btn" class="btn btn-primary mt-4">Update</button>
</form>

  @endsection


        