<?php

namespace App\Http\Controllers;

use App\Models\PublicUser;
use Illuminate\Http\Request;
use App\Models\VaccineCenter;
use App\Models\RegisteredUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Cache\Store;
use App\Actions\StoreRegsiteredUserAction;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\Public\RegisterRequest;

class RegisterController extends Controller
{
    private $storeRegsiteredUserAction;   
    public function __construct(StoreRegsiteredUserAction $storeRegsiteredUserAction)
    {
        $this->storeRegsiteredUserAction = $storeRegsiteredUserAction;
    }
    public function index()
    {
        return view('auth.register',['centers'=> VaccineCenter::all()]);
    }
    public function store(RegisterUserRequest $request): \Illuminate\Http\RedirectResponse
    {
        $validate = $request->validated();
        $this->storeRegsiteredUserAction->store($validate);
        flash()->success('You have successfully Register. Rest will send to your mailbox');
        return to_route('register');
    }
}


