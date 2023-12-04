<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteRequestController extends Controller
{
    public function __invoke(Blog $blog)
    {
        $data = [
            'breadcrumbs' => [
                [
                    'name' => 'Home',
                    'url' => route('admin.dashboard')
                ],
                [
                    'name' => 'Blog',
                    'url' => '',
                ],
                [
                    'name' => 'Create new post',
                    'url' => route('admin.blog.create'),
                ],
            ],
            'blog' => $blog,
        ];
        return view('admin.blog.delete', compact('data'));
    }
}
