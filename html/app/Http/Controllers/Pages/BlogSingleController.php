<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    private $description = "";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('posts-single');
    }

    public function __invoke()
    {
        $data = [
            'description' => $this->description,
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'link' => route('index'),
                ],
                [
                    'name' => 'Blog',
                    'link' => route('posts'),
                ],
                [
                    'name' => 'Avoir un défibrillateur chez soi',
                    'link' => route('posts-single'),
                ],
            ],
            'main_img' => asset('images/blog/blog_single_tmp_main.webp'),
            'main_title' => 'Le défibrillateur pour particulier',
        ];

        return view('pages/posts-single', compact('data'));
    }
}
