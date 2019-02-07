@extends('layouts.admin_common')     
@section('contents')




 <!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Fund</a>
  </li>
  <li class="breadcrumb-item active">Transfer</li>
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


<form method="post" id="add_agent_form_id" action=" {{ url('fundtransfer/store') }}" >
  @csrf

  <div class="form-group">
    <label for="amount_receive">Amount Receive</label>
    <input type="text" name="amount_receive" class="form-control" id="amount_receive" placeholder="Enter Amount" value="{{ old('amount_receive') }}">
  </div>



<select class="browser-default custom-select" name="agent_purpose">
  <label for="purpose"> purpose</label>
  <option selected>Purpose</option>
  <option value="PaymentTransfer">PaymentTransfer</option>
  <option value="Deposit Investment">Deposit Investment</option>
  <option value="Gift">Gift</option>
   <option value="Eduction">Eduction</option>
  <option value="Other">Other</option>
</select>
  <button type="submit" id="submit_btn" class="btn btn-primary mt-4">Submit</button>
</form>


@endsection

