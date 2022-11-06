<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequests\StoreUserRequest;
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(StoreUserRequest $request)
    {
        $data = $request->validated();
        User::FirstOrCreate($data);
        $request->session()->flash('user.status.create', "User created");

        return redirect()->route('user.index');
    }
}
