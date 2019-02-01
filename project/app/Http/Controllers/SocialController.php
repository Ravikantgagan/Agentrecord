<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\User;
use File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class SocialController extends Controller
{
    


    public function redirectToProvider($social) {

        return Socialite::driver($social)->redirect();

     }

    public function handleProviderCallback($social, Request $request)
    {
        
        $users = Socialite::driver($social)->stateless()->user();

        $checkIfExist = User::where('provider', $social)
            ->where('provider_id', $users->getId())
            ->first();

        if ($checkIfExist) {
        
            Auth::login($checkIfExist);
           
            return redirect()->action('HomeController@index'); 
           // return redirect('/'); 
    
        }else{
        
        $user = new User;
        $user->name = $users->getName();
        $user->email = $users->getEmail();
        //  $user->avatar = $users->avatar_original;
        $user->provider = $social;
        $user->provider_id = $users->getId();
        $fileContents = file_get_contents($users->avatar_original);
        $fileName = $users->getId() . ".jpg";

       File::put('assets/upload/user_profile/' . $fileName, $fileContents);

        $user->avatar = $fileName;

        $user->save();
        $userId = $user->id;
        
         
        Auth::login($user);  

        return redirect()->action('HomeController@index'); 
        //return redirect('/'); 
            
        }



    }


}
