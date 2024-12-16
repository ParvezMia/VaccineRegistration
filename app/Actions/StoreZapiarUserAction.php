<?php
namespace App\Actions;

use App\Models\RegisteredUser;
use App\Models\VaccineCenter;

class StoreZapiarUserAction
{
    public function store($validate)
    {
        $center_id = VaccineCenter::where('name', 'like', '%' . $validate['2695ab78'] . '%')
        ->first()
        ->id;
       return RegisteredUser::create([
            'name'=> $validate['37512542'],
            'email'=> $validate['06561fc6'],
            'phone'=> $validate['298277c3'],
            'nid'=> $validate['69ee3849'],
            'vaccine_center_id'=> $center_id,
        ]);
    }
}