<?php

namespace App\Http\Controllers\Pages;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    private $canonical;
    private $url;

    public function __construct()
    {
    }

    public function __invoke($url)
    {
        $this->url = $url;
        $this->canonical = route('posts-single', $this->url);

        $blog = $this->getBlogPost();

        $data = [
            'description' => $blog->meta_description,
            'keywords' => $blog->meta_keywords,
            'canonical' => $this->canonical,
            'title' => $blog->title,
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
                    'name' => $blog->breadcrumb,
                    'link' => route('posts-single', $this->url),
                ],
            ],
            'main_img' => asset('images/blog/blog_single_tmp_main.webp'),
            'main_title' => 'Le défibrillateur pour particulier',
            'blog' => $blog,
            'blogs' => $this->getRecentBlogs(),
        ];

        // dd($data);

        return view('pages/posts-single', compact('data'));
    }

    private function getBlogPost(): Blog
    {
        return Blog::where('url', $this->url)->first();
    }

    private function getRecentBlogs(): Collection
    {
        return Blog::select('id', 'url', 'img_src', 'img_alt', 'date', 'h1', 'meta_description', 'created_at')
                        ->limit(3)
                        ->where('url', '<>', $this->url)
                        ->orderBy('created_at', 'DESC')
                        ->get();
    }
}
