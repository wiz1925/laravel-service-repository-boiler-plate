<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogStoreRequest;
use App\Models\Blog;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct(public BlogService $service)
    {
    }

    public function getBlogs()
    {
        $blogs = $this->service->getAllBlogs();

        return $blogs;
    }

    public function store(BlogStoreRequest $request)
    {
        $store = $this->service->store($request);

        dd($store);
    }

    public function delete(Blog $blog)
    {
        $delete = $this->service->delete($blog);

        dd($delete);
    }
}
