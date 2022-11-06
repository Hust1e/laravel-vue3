<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequests\UpdateUserRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        $request->session()->flash('user.status.update', "User updated");

        return view('user.show', compact('user'));
    }
}
