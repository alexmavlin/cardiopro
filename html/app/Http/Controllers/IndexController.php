<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Database\Eloquent\Collection;

class IndexController extends Controller
{
    private $description = "Défibrillateur en Location ou à l'Achat avec une Formation à Distance, Livraison sous 48H. N'hésitez pas à demander un Devis Réponse dans la Journée &#9200;";
    private $keywords = "défibrillateur cardiaque";
    private $title = 'Spécialiste du Défibrillateur Automatique et Semi Automatique &#10084;';
    private $canonical;

    public function __construct()
    {
        $this->canonical = route('index');
    }

    public function __invoke()
    {
        $data = [
            'description' => $this->description,
            'keywords' => $this->keywords,
            'canonical' => $this->canonical,
            'title' => $this->title,
            'blogs' => $this->getRecentBlogs(),
        ];

        return view('index', compact('data'));
    }

    private function getRecentBlogs(): Collection
    {
        return Blog::select('id', 'url', 'img_src', 'img_alt', 'date', 'h1', 'meta_description', 'created_at')
                        ->limit(3)
                        ->orderBy('created_at', 'DESC')
                        ->get();
    }
}
