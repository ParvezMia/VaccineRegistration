<?php
namespace App\Actions;

use App\Models\RegisteredUser;
use App\Http\Requests\RegisterUserRequest;

class StoreRegsiteredUserAction
{
    public function store($validate)
    {
        

       return RegisteredUser::create([
            'name'=> $validate['name'],
            'email'=> $validate['email'],
            'phone'=> $validate['phone'],
            'nid'=> $validate['nid'],
            'vaccine_center_id'=> $validate['center_id'],
        ]);
    }
}