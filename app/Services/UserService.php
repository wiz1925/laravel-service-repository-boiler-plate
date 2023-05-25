<?php
namespace App\Services;

use App\Repositories\UserRepository\UserRepository;

class UserService
{
    public function __construct(public UserRepository $repository)
    {
    }
    public function all()
    {
        $users = $this->repository->all();

        return $users;
    }

    public function store($request)
    {
        $store = $this->repository->store($request);

        return $store;
    }

    public function delete($user)
    {
        $user->delete();

        return true;
    }
}
