<?php

namespace App\Http\Controllers;

use App\Models\PublicUser;
use Illuminate\Http\Request;
use App\Models\VaccineCenter;
use App\Models\RegisteredUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\Public\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register',['centers'=> VaccineCenter::all()]);
    }
    public function store(RegisterUserRequest $request)
    {
        $validate = $request->validated();

        RegisteredUser::create([
            'name'=> $validate['name'],
            'email'=> $validate['email'],
            'password'=> Hash::make($validate['password']),
            'phone'=> $validate['phone'],
            'nid'=> $validate['nid'],
            'vaccine_center_id'=> $validate['center_id'],
        ]);

        flash()->success('You have successfully Register. Rest will send to your mailbox');
        return to_route('register');
    }
}