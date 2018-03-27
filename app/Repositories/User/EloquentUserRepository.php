<?php

namespace App\Repositories\User;
use App\Repositories\User\UserContract;
use App\User;
Use Illuminate\Support\Facades\DB;

class EloquentUserRepository implements UserContract{

    public function create($request){
        $credentials = [
            'email' => 'jaywizzy@gmail.com',
            'password' => 'password',
        ];
        $user = Sentinel::register($credentials);
    }
}
