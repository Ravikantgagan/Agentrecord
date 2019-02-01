<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Agent;

class RegisterAgentController extends Controller


        {

           public function index(){
            
               $agent = Agent::all();

            return view('admin.admin_dashboard.index',compact('agent'));

          }

          public function agentForm(){

            return view('admin.admin_dashboard.agentForm');
           }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAgent(Request $request)
    {
        $request->validate([
        'agent_name'=>'required',
        'agent_address'=>'required',
        'agent_contact' => 'required|min:11|numeric',
        'agent_type'=> 'required|integer'
        'agent_balance'=> 'required|integer',
        
            ]);

        $agent = new Agent ([
        'agent_name' => $request->get('agent_name'),
        'agent_address' => $request->get('agent_address'),
        'agent_contact' => $request->get('agent_contact'),
        'agent_type' => $request->get('agent_type'),
        'agent_balance' => $request->get('agent_balance'),

      ]);

        $agent->save();

      return redirect('/ADshboard')->with('success', 'agent data has been registered');
        
       }
    }   
  


  




      



    
      
      

    



