<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = Blog::select('id', 'img_src', 'img_alt', 'date', 'h1', 'meta_description', 'created_at')->orderBy('created_at', 'DESC')->paginate(3);

        // dd($data);
        return view('admin.blog.index', compact('data'));
    }
}
