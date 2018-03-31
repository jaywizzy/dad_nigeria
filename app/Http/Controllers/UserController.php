<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Cartalyst\Sentinel\Users\UserInterface;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use App\Repositories\User\UserContract;
use Sentinel;
use Auth;

class UserController extends Controller
{
    //
    protected $userModel;
    
    public function __construct(UserContract $userContract){
        $this->userModel = $userContract;

    }

    public function create(){
        $error = null;
        return view('user.register')->with('error', $error);
    }

    public function save(Request $request){
        $validatedRecords = $request->validate([
            // 'username' => 'required|unique:users',
            'first_name' => 'required',
            'email' => 'required|unique:users',
            'organisation'  =>  'required',
            'password'  =>  'required',
            'g-recaptcha-response' => 'required|recaptcha',

        ]);
        if($validatedRecords) {
            $user = $this->userModel->create($request);
            // $createUser = Sentinel::register($user);
            if ($user) {
                return redirect()->route('home');                                                                                        ;
            } else {
                return view('user.register')->with('errors', 'failed to register user');
            }
        } else {
            return redirect()->back()->with('errors', 'Empty fields detected!');
        }
    		    	

    }

    public function edit(Request $request, $id){
      
        $user = $this->userModel->edit($request,$id);
        return view('user.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
    	 // $user = $this->userModel->update($request,$id); 
      //   		return redirect('index')->with('alert-success', 'Edited successfully ');
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'organisation',
            'title',
            'department',
            'position',
            'postal_address',
            'phone',
            // 'password' => 'required'

        ]);

        if ($validated) {
        $user = $this->userModel->update($request,$id); 
        		return ('Edited successfully ');
        }else{
        	return redirect()->back()->withInput()->with('alert-warning', 'Opps... All fields are required');
        }
    }

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
                return redirect()->route('edit', $user->id);
            }else{
                return ('oh nooo!');
            }
        } else {
            return redirect('/')->back->with('error', 'incorrect login details');
        }
        // dd($user);
        
        
    }

    public function passwordedit() {
        // $user = User::find($id);
        // Sentinel::authenticate($user);
        $user = Sentinel::getUser();
        return view('user.passwordreset')->with('user', $user);
    }

    public function passwordupdate() {
       $user = $this->userRepo->pass();

        if (!$hasher->check($oldPassword, $user->password) || $password != $passwordConf) {
            Session::flash('error', 'Check input is correct.');
            return view('user.passwordreset');
        }

        Sentinel::update($user, array('password' => $password));

        return Redirect::to('index');
    }
}
