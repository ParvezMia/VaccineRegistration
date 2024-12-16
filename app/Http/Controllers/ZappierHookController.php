<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ZapierRequest;
use Illuminate\Contracts\Cache\Store;
use App\Actions\StoreZapiarUserAction;

class ZappierHookController extends Controller
{
    private $storeZapiarUserAction;
    public function __construct(StoreZapiarUserAction $storeZapiarUserAction)
    {
        $this->storeZapiarUserAction = $storeZapiarUserAction;
    }
    public function store(Request $request)
    {
        $this->storeZapiarUserAction->store($request->all());
        return response()->json(['message' => 'success'], 200);
    }
}
