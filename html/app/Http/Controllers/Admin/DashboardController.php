<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $data = [
            'blogs_count' => Blog::count(),
        ];
        
        return view('admin.dashboard', compact('data'));
    }
}
