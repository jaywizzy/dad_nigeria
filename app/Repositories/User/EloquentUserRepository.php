<?php

namespace App\Repositories\User;

use App\Repositories\User\UserContract;
use App\User;
Use Illuminate\Support\Facades\DB;
use Sentinel;

class EloquentUserRepository implements UserContract{

	public function create($request){
        
        $user = new User;

    
        // $user->username = $request->username;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->title = $request->title;
        $user->organisation = $request->organisation;
        $user->department = $request->department;
        $user->position = $request->position;
        $user->postal_address = $request->postal_address;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->comment = $request->comment;
        $user->password = $request->password;
        
        // $save_user = Sentinel::register($user);
        $user->save();
		return $user;
	}
	
	public function edit($request, $id){
		$user = User::find($id);
		return $user;
	}

	public function update($request, $id){
		$user = User::find($id);
		
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->email = $request->email;
		$user->organisation = $request->organisation;
		$user->title = $request->title;
		$user->department = $request->department;
		$user->position = $request->position;
		$user->postal_address = $request->postal_address;
		$user->phone = $request->phone;

		$user->save();
		return $user;
		
	}

	public function pass(){
    	$hasher = Sentinel::getHasher();

        $oldPassword = Input::get('old_password');
        $password = Input::get('password');
        $passwordConf = Input::get('password_confirmation');

        $user = Sentinel::getUser();
    }
	
}
