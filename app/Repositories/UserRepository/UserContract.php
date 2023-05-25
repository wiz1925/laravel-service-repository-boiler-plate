<?php
namespace App\Repositories\UserRepository;

interface UserContract
{
    public function all();

    public function store($request);
}
