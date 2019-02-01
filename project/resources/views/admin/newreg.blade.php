 @extends('layouts.admin_common')     
  @section('contents')

    @if(session('message'))
    <p class="alert alert-success"></p>
    @endif

    <!-----Breadcrumb----->
          <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Register</a>
                </li>
               <li class="breadcrumb-item active">Agent</li>
            </ol>
          <form method="post" id="add_agent_form_id" action=" {{ url('/agent/store') }} " onsubmit="return validation()"  class="bg-light" >
              @csrf

            <div class="form-row">
              <div class="form-group col-md-6">
               <label for="agent_name">Agent Name</label>
                <input type="text" name="agent_name" class="form-control" id="agent_name" placeholder="Agent Name" autocomplete="off">
                 <span id="name" class="text-danger font-weight-bold"></span>
           </div>


            <div class="form-group col-md-6">
              <label for="agent_contact">Agent Contact</label>
               <input type="text" name="agent_contact" class="form-control number" id="agent_contact" placeholder="9809876543" autocomplete="off" >
              <span id="contact" class="text-danger font-weight-bold"></span>
          </div>
      </div>

      <div class="form-group">
            <label for="agent_address">Agent Address</label>
              <input type="text" name="agent_address" class="form-control" id="agent_address" placeholder="1234 Main St" autocomplete="off">
            <span id="address" class="text-danger font-weight-bold"></span>
        </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="agent_type">Agent Type</label>
          <input type="text" name="agent_type" id="agent_type" class="form-control"  autocomplete="off">
        
          <span id="type" class="text-danger font-weight-bold"></span>
          </div>
      </div>


        <button type="submit" id="submit_btn" class="btn btn-primary" value="submit">Register</button>
      </form>


                          
               


        <script>

      function validation(){
       //get the value input field and hold the variable

      var agent_name = document.getElementById('agent_name').value;
     

      if( agent_name == ""){

        document.getElementById('name').innerHTML= "** please fill the agent name field";

        return false;

      }

        if(( agent_name.length<=2)||( agent_name.length>20)){


          document.getElementById('name').innerHTML= "** length must be 2 and 20";

         return false;

      }

       if(!isNaN(agent_name )){

        document.getElementById('name').innerHTML= "** only chracters are allowed";


          return false;
      }
    
    }


       function validation(){
    

        var agent_address = document.getElementById('agent_address').value;
     

      if( agent_address == ""){

         document.getElementById('address').innerHTML= "** please fill the address field";


          return false;
         }

       if(( agent_address.length<=2)||( agent_address.length>40)){

        document.getElementById('address').innerHTML= "** length must be 2 and 40";

          return false;

         }

       if(!isNaN(agent_address )){

        document.getElementById('address').innerHTML= "** only chracters are allowed";


        return false;
      }

}

    function validation(){
    

      var agent_type = document.getElementById('agent_type').value;
     

          if( agent_type == ""){

            document.getElementById('type').innerHTML= "** please fill the type field";


        return false;
      }

   if(( agent_type.length<=2)||( agent_type.length>20)){

          document.getElementById('type').innerHTML= "** length must be 2 and 20";

        return false;

      }

   if(!isNaN(agent_type )){

        document.getElementById('type').innerHTML= "** only chracters are allowed";


        return false;
      }
}

 

 function validation(){
  

      var agent_contact = document.getElementById('agent_contact').value;
     

        if( agent_contact == ""){

              document.getElementById('contact').innerHTML= "** please fill the valid number ";


         return false;
            }

     if( isNaN(agent_contact)){

            document.getElementById('contact').innerHTML= "** please fill the valid number ";


            return false;
        }

     if( agent_contact.length!=10){

           document.getElementById('contact').innerHTML= "** number must  be 10 digit ";


             return false;
      }

}


</script>

   @endsection

      









 

       
     

     


  








            



           



                  