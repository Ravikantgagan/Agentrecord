<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Agent;
use App\Agentbalancesheet;
use App\Assignclientagent;
use App\Client;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;

 class ADashboardController extends Controller
{
    public function __construct(){
     
     $this->middleware('auth:admin');
     }


    public function index(){
     return view ('admin.admin_dashboard.index');

     }
    public function agent_index(){
     return view ('agent_index');

     }

    public function regAgentForm(Request $request) {
    return view('admin.register_agent');

     }

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
          //print_r($request->all());
         //die;
          $messages = [
             'agent_contact.required' => 'Phone Number Must Be 10 Digit!',
            ];
          $validator = Validator::make($request->all(), [
            'agent_name' => 'required',
            'agent_address' => 'required|max:255',
            'agent_type' => 'required|max:25',
            'agent_contact' =>'required|min:10'
             //'agent_email' => 'required|string| email|max:255|unique:agents'
             //'agent_email' => 'required',
            // 'agent_password' => ['required', 'string', 'min:6', 'confirmed'],
     
          ],$messages);

          if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        // if($validator->fails()){
        //    return redirect()->back()->with('message','error');
        // }

        $agent = new Agent;
        $agent->agent_name= $request->agent_name;
        $agent->email= $request->email;
        //$agent->agent_password= Hash::make($request->agent_password);
        $agent->agent_password= $request->agent_password;
        $agent->remember_token= $request->_token;
        $agent->agent_address= $request->agent_address;
        $agent->agent_contact= $request->agent_contact;
        $agent->agent_type= $request->agent_type;
        
       // $agent->agent_balance= $request->agent_balance;
        $agent->save();
        return redirect ('/agentshow')->with('message','successfully Registered');
    
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

        //Client

    public function regClientForm(Request $request) {
    return view('admin.register_client');

     }


        public function storeClient(Request $request)
         {
          //print_r($request->all());
         //die;
          $messages = [
             'client_contact.required' => 'Phone Number Must Be 10 Digit!',
            ];
          $validator = Validator::make($request->all(), [
            'client_name' => 'required',
            'client_address' => 'required|max:255',
            'client_type' => 'required|max:25',
            'client_contact' =>'required|min:10'
     
          ],$messages);

          if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        // if($validator->fails()){
        //    return redirect()->back()->with('message','error');
        // }

        $clients = new Client;
        $clients->client_name= $request->client_name;
        $clients->client_address= $request->client_address;
        $clients->client_contact= $request->client_contact;
        $clients->client_type= $request->client_type;
        $clients->save();
        return redirect ('/clientshow')->with('message','successfully Registered');

    
         }
        public function showClient(){
        $clients = Client::all();
         return view('admin.show_client', compact('clients'));
         }





        public function editClient(Request $request, $id) {
            $data['client']=Client::findOrFail($id);
            return view('admin.edit_client',$data);
            }

       
        public function updateClient(Request $request, $id){

        DB::table('clients')
            ->where('client_id', $id)
            ->update([
                    'client_name' => $request->client_name,
                    'client_address' => $request->client_address,
                    'client_contact' => $request->client_contact,
                    'client_type' => $request->client_type,
                     ]);

        return redirect ('/clientshow')->with('message','successfully updated');
        }
         public function viewClient($id){
        $client =Client::find($id);

        return view('admin.view_client', compact('client'));
        
         }
         public function destroyClient($id){
         $user = Client::find($id);
         $user->delete();
        return redirect ('/clientshow');
        // ->with('message','successfully deleted');
        }


        public function getClientAgentData(){
         //fetching data of  three table using join and show getclientdata view
         $client = DB::table('clients')->select('client_id', 'client_name')->get();
         $agent = DB::table('agents')->select('agent_id', 'agent_name')->get();

         $assign= DB::table('assignclientagents')
        ->join('agents', 'assignclientagents.agent_id', '=', 'agents.agent_id')
        ->join('clients', 'assignclientagents.client_id', '=', 'clients.client_id')
        ->select( 'agents.agent_name', 'clients.client_name','assignclientagents.id')
        ->orderByRaw( ' agents.agent_name,clients.client_name')
        ->get();

        return view('admin.getclientdata',compact('client','agent','assign'));
        }


        public function clientagentStore(Request $request){
          $assigndata= DB::table('assignclientagents')
          ->where('agent_id',$request->agent_id) 
          ->where('client_id',$request->client_id)
          ->count();
         
        // echo $assigndata;
        // die;
         
          if($assigndata >0){
            
            return redirect()->back()->with('message','These Client And Agent Allready Assigned');

          } 
          else{
        $assign = new Assignclientagent;
        $assign->client_id= $request->client_id;
        $assign->agent_id= $request->agent_id;
        //print_r($request->all());
        //die;
        $assign->save();
        return redirect ('/getclientagentdata');
          }
      
        //return "successfully save";
            }

         public function destroyAssignData($id){
          $assign = Assignclientagent::find($id);
          $assign->delete();
          return redirect()->back()->with('message', 'successfully Deleted!');
          //return redirect ('/getclientagentdata');
          }




         }

     



               
               
          
    
                
         





    
    
       
    





    

    
        

                
                

        
                 
    





                  
               
           
                 
                 


              

            
                	


         
                 
                     

         
        
         
     







        

