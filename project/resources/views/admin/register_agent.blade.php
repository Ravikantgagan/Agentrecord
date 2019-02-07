@extends('layouts.admin_common')     
@section('contents')

 <!-- Breadcrumbs-->
          <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Register</a>
          </li>
          <li class="breadcrumb-item active">Agent</li>
          </ol>

          @if(Session::has('message'))
            <div class="alert alert-info">
                {{ Session::get('message') }}
            </div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            </div>
          @endif



         

<form method="post" id="add_agent_form_id" action=" {{ url('/agent/store') }}" >
  @csrf

    <div class="form-group">
        <label for="agent_name">Agen Name</label>
       <input type="text" name="agent_name" class="form-control" id="agent_name" placeholder="Agent Name" value="{{ old('agent_name') }}">
  </div>


  <div class="form-row">
    <div class="form-group col-md-12">
         <label for="agent_contact">Agent Contact</label>
         <input type="number" name="agent_contact" class="form-control {{ $errors->has('agent_contact') ? ' is-invalid' : 'Phone Number is invalid' }}" id="agent_contact" placeholder="9809876543"  value="{{ old('agent_phone') }}" autocomplete="off">

           @if ($errors->has('agent_contact'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('agent_contact') }}</strong>
            </span>
            @endif
       </div>
    </div>

   <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4"> Email</label>
          <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="rk@gmail123.com" name="email"   value="{{ old('email') }}">

           @if ($errors->has('email'))
           <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
      </div>

      <div class="form-group col-md-6">
          <label for="inputPassword4"> Password</label>
          <input type="password" class="form-control{{ $errors->has('agent_email') ? ' is-invalid' : '' }}" id="agent_password" placeholder="Password" name="agent_password"  value="{{ old('agent_password') }}" >

            @if ($errors->has('agent_password'))
             <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('agent_Password') }}</strong>
            </span>
            @endif 
    </div>
  </div>




      <div class="form-group">
          <label for="agent_address">Agent Address</label>
            <input type="text" name="agent_address" class="form-control{{ $errors->has('agent_address') ? ' is-invalid' : '' }}" id="agent_address" placeholder="1234 Main St" value="{{ old('agent_address') }}">
               @if ($errors->has('agent_address'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('agent_address') }}</strong>
               </span>
                 @endif
          </div>


        <select class="browser-default custom-select" name="agent_type">
        <option selected>Choose AgentType</option>
        <option value="Regular">Regular</option>
        <option value="Part time">Part Time</option>
        <option value="Full Time">Full Time</option>
        </select><br>

  


  <button type="submit" id="submit_btn" class="btn btn-primary mt-4">Register</button>
</form>


@endsection


        