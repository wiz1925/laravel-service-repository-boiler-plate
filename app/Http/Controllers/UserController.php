<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(public UserService $service)
    {
    }
    public function all()
    {
        $users = $this->service->all();

        dd($users);
    }

    public function store(UserStoreRequest $request)
    {
        $store = $this->service->store($request);

        dd($store);
    }

    public function delete(User $user)
    {
        $delete = $this->service->delete($user);

        dd($delete);
    }
}
