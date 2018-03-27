<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Cartalyst\Sentinel\Users\UserInterface;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Sentinel;

class UserController extends Controller
{
    //
    public function loginpage(){
        return view('login');
    }

    public function postlogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', $email)->where('password', $password)->first();
        if($user) {
            $login = Sentinel::findById($user->id);

            // $login = Sentinel::login($user);
            if (Sentinel::login($login)){
                return ('yeah');
            }else{
                return ('oh nooo!');
            }
        } else {
            return ('No record exists!');
        }
        // dd($user);
        
        
    }
}
