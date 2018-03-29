<?php

namespace App\Repositories\User;

interface UserContract{

	public function create($request);
	public function edit($request, $id);
	public function update($request, $id);
	public function pass();
	
}