<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use App\Client;

class AgentLoginController extends Controller
{
     use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'AgentDshboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:agent')->except('logout');
    }

     /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.agent_login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('agent');
    }

    public function loginuser(Request $request){

     //  print_r($request->all());
     //  die;

       $loggedagent= DB::table('agents')
          ->where('email',$request->email) 
          ->where('agent_password',$request->password)
          ->first();
         
      // echo $loggedagent->agent_id;
        //die;
         
          if(empty($loggedagent)){
            
            return redirect()->back()->with('message','your password and email do not match');

          } 
          else{
            Session::put('loggeduser',$loggedagent);
                
             $assign= DB::table('assignclientagents')
              ->where('agent_id',$loggedagent->agent_id)
              ->select('client_id');

               print_r($assign);
           //   die();


                $client = DB::table('clients')->where('client_id',$assign->client_id)->get();
                // $agent = DB::table('agents')->select('agent_id', 'agent_name')->get();
                // $assign= DB::table('assignclientagents')
                //  ->join('agents', 'assignclientagents.agent_id', '=', 'agents.agent_id')
                //  ->join('clients', 'assignclientagents.client_id', '=', 'clients.client_id')
                //  ->select( 'agents.agent_name', 'clients.client_name','assignclientagents.id','client_address','client_contact')
                //  ->orderByRaw( ' agents.agent_name,clients.client_name')
                //   ->get();

            return view('show_assignclient',compact('client','agent','assign'));

    }
   }
}
