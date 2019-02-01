@extends('layouts.admin_common')
 

@section('contents')

<form action="{{ url('adashboard.register') }}" method="post">

            <div class="form-group">
              <div class="form-row">

                <div class="col-md-6">

                  <div class="form-label-group">

                    <input type="text"  class="form-control" placeholder="agent_name"  autofocus="autofocus" name="agent_name"id="agent_name">
                    <label for="agent_name">Agent_Name</label>
                  </div>
                </div>

                <div class="col-md-6">

                  <div class="form-label-group">

                    <input type="text"  class="form-control" placeholder="agent_address"  autofocus="autofocus" name="agent_address"id="agent_adress">
                    <label for="agent_name">Agent_Adress</label>
                  </div>
                </div>

                 <div class="col-md-6">

                  <div class="form-label-group">

                    <input type="text"  class="form-control" placeholder="agent_contact"  autofocus="autofocus" name="agent_contact"id="agent_contact">
                    <label for="agent_contact">Agent_Contact</label>
                  </div>
                </div>

                <div class="col-md-6">

                  <div class="form-label-group">

                    <input type="text"  class="form-control" placeholder="agent_type"  autofocus="autofocus" name="agent_type"id="agent_type">
                    <label for="agent_type">Agent_Type</label>
                  </div>
                </div>

                <div class="col-md-6">

                  <div class="form-label-group">

                    <input type="text"  class="form-control" placeholder="agent_balance"  autofocus="autofocus" name="agent_balance"id="agent_balance">
                    <label for="agent_balance">Agent_Contact</label>
                  </div>
                </div>

                
                

              </div>
            </div>

            <a class="btn btn-primary btn-block" href="login.html">Register</a>
          </form>



          <div class="text-center">
            <a class="d-block small mt-3" href="login.html">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

 @endsection