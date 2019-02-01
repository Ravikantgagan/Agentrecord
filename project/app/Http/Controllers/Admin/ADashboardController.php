<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agent;
use App\Agentbalancesheet;
use Illuminate\Support\Facades\Validator;

 class ADashboardController extends Controller
{
    public function __construct(){
     
     $this->middleware('auth:admin');
     }


    public function index(){

     return view ('admin.admin_dashboard.index');

     }
     

    public function regAgentForm(Request $request) {


    return view('admin.register_agent');

     }

    /**
     * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
        protected function validator(array $data){
      
        return Validator::make($data, [
        'agent_name' => ['required', 'string', 'max:255'],
        'agent_address' => ['required', 'string', 'max:255'],
        'agent_type' => ['required', 'string', 'max:255'],
        'agent_contact' => 'required|min:10|numeric',
     
         
             ]);
         }


        public function storeAgent(Request $request)
         {
          
    
        $agent = new Agent;
        $agent->agent_name= $request->agent_name;
        $agent->agent_address= $request->agent_address;
        $agent->agent_contact= $request->agent_contact;
        $agent->agent_type= $request->agent_type;
       // $agent->agent_balance= $request->agent_balance;
        $agent->save();

        return redirect ('/agentshow')->with('message','successfully Registered');;
         //return redirect('/admin-dashboard');
    
         }

        public function showAgent(){
            $agents = Agent::all();
             return view('admin.show_agent', compact('agents'));
         }

      

        public function editAgent(Request $request, $id) {
            $data['agent']=Agent::findOrFail($id);
           
            return view('admin.edit_agent',$data);
            }

       
        public function updateAgent(Request $request, $id){


        $agent=Agent::find( $id);
        $agent->agent_name= $request->agent_name;
        $agent->agent_address= $request->agent_address;
        $agent->agent_contact= $request->agent_contact;
        $agent->agent_type= $request->agent_type;
        //$agent->agent_balance= $request->agent_balance;
        $agent->save();

            return redirect ('/agentshow')->with('message','successfully updated');
        }


            
        public function destroyAgent($id){

         $agent = Agent::find($id);
         $agent->delete();

        return redirect('/agentshow')->with('message','successfully deleted');
        }
     
       public function viewAgent($id){

        $agent = Agent::find($id);
        
        return view('admin.view-agent', compact('agent'));
        
         }

     // user method    

        public function reguserForm(Request $request) {


        return view('admin.register_user');

         }

        public function storeUser(Request $request){
            
        $users = new Agentbalancesheet;
        $users->user_name= $request->user_name;
        $users->user_balance= $request->user_balance;
        $users->save();

        return redirect ('/showuser')->with('message','successfully Registered');;
         //return redirect('/admin-dashboard');
         }

       public function showUser(){

        $users = Agentbalancesheet::all();

        return view('admin.show_user', compact('users'));
         }

        public function viewUser($id){

        $user =Agentbalancesheet::find($id);
        
        return view('admin.view_user', compact('user'));
        
         }

         public function edituser(Request $request, $id) {
            $data['user']=Agentbalancesheet::findOrFail($id);
           
            return view('admin.edit_user',$data);
            }

       
        public function updateUser(Request $request, $id){


        $user=Agentbalancesheet::find( $id);
        $user->user_name= $request->user_name;
        $user->user_balance= $request->user_balance;
        $user->save();

        return redirect ('/showuser')->with('message','successfully updated');
        }

        public function destroyUser($id){

         $user = Agentbalancesheet::find($id);
         $user->delete();
        return redirect ('/showuser')->with('message','successfully deleted');
        }




               
               
          
    
                
         



}

    
    
       
    





    

    
        

                
                

        
                 
    





                  
               
           
                 
                 


              

            
                	


         
                 
                     

         
        
         
     







        

