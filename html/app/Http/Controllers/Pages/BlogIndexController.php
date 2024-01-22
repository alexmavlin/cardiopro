<?php

namespace App\Http\Controllers\Pages;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class BlogIndexController extends Controller
{
    private $description = "Defibrillateur-Shop - Achat Défibrillateur DAE";
    private $keywords = "";
    private $title = "CardioPro.fr | L’actualité de CardioPro";
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('posts');
    }

    public function __invoke()
    {
        $blogs = $this->getBlogs();
        $data = [
            'description' => $this->description,
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
            'title' => $this->title,
            'breadcrumbs' => [
                [
                    'name' => 'Cardiopro',
                    'title' => "achat et location de défibrillateurs",
                    'link' => route('index'),
                ],
                [
                    'name' => 'Blog',
                    'link' => "#",
                ],
            ],
            'blogs' => $blogs,
            'pagination' => [
                'current' => $blogs->currentPage(),
                'total' => $blogs->total(),
                'next_url' => $blogs->nextPageUrl(),
                'next_num' => $blogs->nextPageUrl() ? (int) last(explode('=', parse_url($blogs->nextPageUrl(), PHP_URL_QUERY))) : null,
                'prev_url' => $blogs->previousPageUrl(),
                'prev_num' => $blogs->previousPageUrl() ? (int) last(explode('=', parse_url($blogs->previousPageUrl(), PHP_URL_QUERY))) : null,
                'last' => $blogs->lastPage(),
                'show' => $blogs->total() > $blogs->perPage() ?: false,
            ],
        ];
        //dd(response()->json($data));

        return view('pages/posts', compact('data'));
    }

    private function getBlogs(): LengthAwarePaginator
    {
        return Blog::select('id', 'url', 'h1', 'img_src', 'img_alt', 'meta_description', 'date', 'created_at')->orderBy('created_at', 'DESC')->paginate(6);
    }
}
