<?php

namespace App\Http\Controllers\Pages;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogIndexController extends Controller
{
    private $description = "Defibrillateur-Shop - Achat Défibrillateur DAE";
    private $keywords = "";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('posts');
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
            ],
            'blogs' => $this->getBlogs(),
        ];

        return view('pages/posts', compact('data'));
    }

    private function getBlogs(): LengthAwarePaginator
    {
        return Blog::select('id', 'url', 'h1', 'img_src', 'img_alt', 'meta_description', 'date', 'created_at')->orderBy('created_at', 'DESC')->paginate(6);
    }
}
