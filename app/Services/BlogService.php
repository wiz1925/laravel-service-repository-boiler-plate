<?php
namespace App\Services;

use App\Repositories\BlogRepository\BlogRepository;

class BlogService
{
    public function __construct(public BlogRepository $repository)
    {
    }
    public function getAllBlogs()
    {
        $blogs = $this->repository->getAllBlogs();

        return $blogs;
    }

    public function store($request)
    {
        $blog = $this->repository->store($request);

        return $blog;
    }

    public function delete($blog)
    {
        $blog->delete();

        return true;
    }
}
