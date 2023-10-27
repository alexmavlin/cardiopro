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
                    'name' => 'Nos Produits',
                    'link' => '#',
                ],
                [
                    'name' => 'FAQ Défibrillateur',
                    'link' => route('posts-single'),
                ],
            ],
        ];

        return view('pages/posts-single', compact('data'));
    }
}
