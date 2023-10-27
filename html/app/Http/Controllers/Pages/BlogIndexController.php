<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        ];

        return view('pages/posts', compact('data'));
    }
}
