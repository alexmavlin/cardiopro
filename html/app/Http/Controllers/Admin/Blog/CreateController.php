<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
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
        ];

        //dd($data);

        return view('admin.blog.create', compact('data'));
    }
}
