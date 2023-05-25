<?php
namespace App\Repositories\BlogRepository;

interface BlogContract
{
    public function getAllBlogs();

    public function store($request);
}
